<?php

class Pegawai extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        if ($this->session->userdata('level') != 1) {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    Anda Belum Login
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>');
            redirect('auth/login');
        }
    }

    public function index()
    {

        // $data['data_pegawai'] = $this->db->get('data_pegawai')->result();
        $data['data_pegawai'] = $this->db->query(" SELECT data_pegawai.nip , data_pegawai.nama, data_pegawai.jabatan, data_pegawai.pangkat 
        FROM data_pegawai JOIN user ON data_pegawai.nip = user.username WHERE user.level != 1 ")->result();

        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('sekre/pegawai', $data);
        $this->load->view('templates_admin/footer');
    }

    public function tambah_aksi()
    {

        $nip = $this->input->post('nip');
        // $alamat = $this->input->post('alamat');
        $nama = $this->input->post('nama');
        $jabatan = $this->input->post('jabatan');
        $pangkat = $this->input->post('pangkat');


        $data = array(
            'nip' => $nip,
            // 'alamat' => $alamat,
            'nama' => $nama,
            'jabatan' => $jabatan,
            'pangkat' => $pangkat
        );

        $this->Model_data_pegawai->tambah_data_pegawai($data, 'data_pegawai');
        redirect('sekre/pegawai/');
    }

    public function edit($nip)
    {

        $where = array('nip' => $nip, );
        $data['data_pegawai'] = $this->Model_data_pegawai->edit_data_pegawai($where, 'data_pegawai')->result();

        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('sekre/edit_pegawai', $data);
        $this->load->view('templates_admin/footer');
    }

    public function update()
    {
        $niplama = $this->input->post('niplama');
        $nip = $this->input->post('nip');
        $nama = $this->input->post('nama');
        $jabatan = $this->input->post('jabatan');
        $pangkat = $this->input->post('pangkat');
        // $level = $this->input->post('level');

        $datat = array(
            'nama' => $nama,
            'jabatan' => $jabatan,
            'pangkat' => $pangkat,
            'nip' => $nip
        );

        $wheret = [
            'nip' => $niplama
        ];

        $data = [
            'username' => $nip,
            'nama' => $nama
        ];

        $where = [
            'username' => $niplama
        ];

        $this->Model_user->update_data($where, $data, 'user');
        $this->Model_data_pegawai->update_datat($wheret, $datat, 'data_pegawai');
        redirect('sekre/pegawai/');
    }
}
