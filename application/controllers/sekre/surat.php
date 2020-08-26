<?php

class Surat extends CI_Controller
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

        $data['surat'] = $this->db->query("SELECT * FROM surat_penugasan ORDER BY no_surat DESC")->result();

        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('sekre/surat', $data);
        $this->load->view('templates_admin/footer');
    }

    public function lihat($no_surat)
    {
        $where = array('no_surat' => $no_surat);
        $data['surat'] = $this->Model_surat_penugasan->edit_surat_penugasan($where, 'surat_penugasan')->result();

        $data['kadin'] = $this->db->query(" SELECT * FROM user WHERE level = 3")->result();
 
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('sekre/lihat_surat', $data);
        $this->load->view('templates_admin/footer');
    }

    public function edit($no_surat)
    {
        $where = array('no_surat' => $no_surat);
        $data['surat'] = $this->Model_surat_penugasan->edit_surat_penugasan($where, 'surat_penugasan')->result();

        $data['kadin'] = $this->db->query(" SELECT * FROM user WHERE level = 3")->result();

        $data['datatugas'] = $this->db->query(" SELECT * FROM  data_pegawai  WHERE no_surat = $no_surat ")->result();
        $data['dagas'] = $this->db->query(" SELECT * FROM  data_pegawai  WHERE no_surat = $no_surat ");


        $data['user'] = $this->db->query(" SELECT * FROM user ")->result();

        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('sekre/edit_surat', $data);
        $this->load->view('templates_admin/footer');
    }

    public function tambah_aksi()
    {

        // $judul = $this->input->post('judul');
        $keterangan = $this->input->post('keterangan');
        $alamat = $this->input->post('alamat');
        // $status_surat = 0;


        $data = array(
            // 'judul' => $judul,
            'keterangan' => $keterangan,
            'alamat' => $alamat
        );

        $this->Model_surat->tambah_surat($data, 'surat_penugasan');
        redirect('sekre/surat/');
    }

    public function tambah_pegawai_aksi()
    {

        $nip = $this->input->post('nip');
        $no_surat = $this->input->post('no_surat');
        $nama = $this->input->post('nama');
        $jabatan = $this->input->post('jabatan');
        $pangkat = $this->input->post('pangkat');

        $data = array(
            'nip' => $nip,
            'no_surat' => $no_surat,
            'nama' => $nama,
            'jabatan' => $jabatan,
            'pangkat' => $pangkat
        );

        $this->Model_data_pegawai->tambah_data_pegawai($data, 'data_pegawai');
        redirect('sekre/surat/edit/' . $no_surat);
    }

    public function edit_surat_aksi()
    {
        $keterangan = $this->input->post('keterangan');
        $alamat = $this->input->post('alamat');
        $no_surat = $this->input->post('no_surat');

        $data = [
            'keterangan' => $keterangan,
            'alamat' => $alamat
        ];
        $where = [
            'no_surat' => $no_surat
        ];

        $this->Model_surat_penugasan->update_data($where, $data, 'surat_penugasan');
        redirect('sekre/surat/');
    }


    public function hapus_pegawai_aksi($no_surat, $nip)
    {

        // $nip = $this->input->post('nip');
        // $no_surat = $this->input->post('no_surat');


        $where = ['nip' => $nip , 'no_surat' => $no_surat];

        $this->Model_data_pegawai->hapus_data($where, 'data_pegawai');
        redirect('sekre/surat/edit/' . $no_surat);
    }

    public function ajukan_surat($no_surat)
    {      
        $data = [
                       'status_surat' => 1
        ];
        $where = [
            'no_surat' => $no_surat
        ];

        $this->Model_surat_penugasan->update_data($where, $data, 'surat_penugasan');
        redirect('sekre/surat/');
    }


}
