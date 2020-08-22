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

        $data['surat'] = $this->db->get('surat_penugasan')->result();

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


}
