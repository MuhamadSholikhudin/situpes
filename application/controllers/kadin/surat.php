<?php

class Surat extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        if ($this->session->userdata('level') != 3) {
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

        $data['surat'] = $this->db->query("SELECT * FROM surat_penugasan WHERE status_surat != 0 ORDER BY no_surat DESC")->result();

        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('kadin/surat', $data);
        $this->load->view('templates_admin/footer');
    }

    public function lihat($no_surat)
    {
        $where = array('no_surat' => $no_surat);
        $data['surat'] = $this->Model_surat_penugasan->edit_surat_penugasan($where, 'surat_penugasan')->result();

        $data['kadin'] = $this->db->query(" SELECT * FROM user WHERE level = 3")->result();

        $data['datatugas'] = $this->db->query(" SELECT * FROM  data_pegawai  WHERE no_surat = $no_surat ")->result();
        $data['dagas'] = $this->db->query(" SELECT * FROM  data_pegawai  WHERE no_surat = $no_surat ");


        $data['user'] = $this->db->query(" SELECT * FROM user ")->result();

        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('kadin/acc_surat', $data);
        $this->load->view('templates_admin/footer');
    }

    public function edit_aksi()
    {


        //Update data attribut
        $no_surat = $this->input->post('no_surat');
        $id = $this->input->post('no_jadwal');
        $result = array();
        foreach ($no_surat as $key => $val) {
            $result[] = array(
                "no_surat" => $no_surat[$key],
                "status_surat" => $_POST['status_surat'][$key]
                // "jumlah"  =>$_POST['nilai'][$key]
                // "jumlah"  => $_POST['skor'][$key] * $_POST['nilai'][$key]
            );
        }
        $this->db->update_batch('data_pegawai', $result, 'status_surat');

        redirect('kadin/surat/');
    }

}
