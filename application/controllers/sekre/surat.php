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

        // $data['pengguna'] = $this->db->get('user')->result();

        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('sekre/surat');
        $this->load->view('templates_admin/footer');
    }

    public function tambah_aksi()
    {

        $judul = $this->input->post('judul');
        $keterangan = $this->input->post('keterangan');
        $tgl_berlaku = $this->input->post('tgl_berlaku');
        $status_surat = 0;


        $data = array(
            'judul' => $judul,
            'keterangan' => $keterangan,
            'tgl_berlaku' => $tgl_berlaku,
            'status_surat' => $status_surat
        );

        $this->model_surat->tambah_surat($data, 'surat_penugasan');
        redirect('sekre/pengguna/');
    }


}
