<?php

class Laporan extends CI_Controller
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

    public function pegawai()
    {

        $data['user'] = $this->db->get('user')->result();

        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('sekre/laporan', $data);
        $this->load->view('templates_admin/footer');
    }
    public function surat()
    {

        $data['surat'] = $this->db->get('surat_penugasan')->result();

        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('sekre/laporan_surat', $data);
        $this->load->view('templates_admin/footer');
    }
    public function absensi()
    {

        $data['surat'] = $this->db->get('surat_penugasan')->result();

        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('sekre/laporan_absensi', $data);
        $this->load->view('templates_admin/footer');
    }
}
