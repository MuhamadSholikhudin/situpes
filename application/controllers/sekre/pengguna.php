<?php

class Pengguna extends CI_Controller
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

        $data['user'] = $this->db->get('user')->result();

        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('sekre/pengguna', $data);
        $this->load->view('templates_admin/footer');
    }

    public function tambah_aksi()
    {

        $nama = $this->input->post('nama');
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $level = $this->input->post('level');


        $data = array(
            'nama' => $nama,
            'username' => $username,
            'password' => $password,
            'level' => $level
        );

        $this->model_user->tambah_user($data, 'user');
        redirect('sekre/pengguna/');
    }


}
