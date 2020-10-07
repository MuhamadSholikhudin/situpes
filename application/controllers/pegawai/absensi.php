<?php

class Absensi extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        if ($this->session->userdata('level') != 2) {
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
        $username = $this->session->userdata('username');

        $data['surat'] = $this->db->query("SELECT surat_penugasan.no_surat, surat_penugasan.alamat FROM surat_penugasan JOIN data_pegawai ON surat_penugasan.no_surat = data_pegawai.no_surat WHERE status_surat = 2 AND data_pegawai.nip = '$username' ORDER BY surat_penugasan.no_surat DESC")->result();

        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('pegawai/surat', $data);
        $this->load->view('templates_admin/footer');
    }

    public function pegawai($no_surat)
    {
        $username = $this->session->userdata('username');

        $data['jadwal'] = $this->db->query("SELECT id_jadwal, jadwal, nip, status_jadwal FROM jadwal_penugasan WHERE no_surat = $no_surat AND nip = '$username' ORDER BY jadwal ASC")->result();

        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('pegawai/pegawai', $data);
        $this->load->view('templates_admin/footer');
    }

    public function input($id_jadwal)
    {
          $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('pegawai/input');
        $this->load->view('templates_admin/footer');
    }

    public function edit($id_jadwal)
    {
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('pegawai/update');
        $this->load->view('templates_admin/footer');
    }

}
