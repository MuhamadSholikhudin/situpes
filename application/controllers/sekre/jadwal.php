<?php

class Jadwal extends CI_Controller
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
        $this->load->view('sekre/jadwal', $data);
        $this->load->view('templates_admin/footer');
    }

    public function data($no_surat)
    {

        $data['pegawai'] = $this->db->query("SELECT * FROM data_pegawai WHERE no_surat = $no_surat ORDER BY no_surat DESC")->result();

        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('sekre/jadwal_data', $data);
        $this->load->view('templates_admin/footer');
    }

    public function pegawai($id)
    {
        $data['pegawai'] = $this->db->query("SELECT * FROM data_pegawai WHERE id = $id ")->result();

        $data['jadwal'] = $this->db->query("SELECT * FROM jadwal_penugasan WHERE id = $id ORDER BY id_jadwal DESC")->result();

        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('sekre/jadwal_pegawai', $data);
        $this->load->view('templates_admin/footer');
    }

    public function tambah_aksi()
    {

        // $judul = $this->input->post('judul');
        $jadwal = $this->input->post('jadwal');
        $id = $this->input->post('id');
        $nip = $this->input->post('nip');
        $no_surat = $this->input->post('no_surat');
        // $status_surat = 0;


        $data = array(
            'jadwal' => $jadwal,
            'id' => $id,
            'nip' => $nip,
            'no_surat' => $no_surat
        );

        $this->Model_jadwal_penugasan->tambah_jadwal_penugasan($data, 'jadwal_penugasan');
        redirect('sekre/jadwal/pegawai/'. $id);
    }


    public function jadwal_lihat()
    {
        // $id_jadwal = $_POST['id_jadwal'];
        // $where = array('id_jadwal' => $id_jadwal);
        // echo json_encode($this->Model_jadwal_penugasan->edit_jadwal_penugasan($where, 'jadwal_penugasan')->result());
        // echo json_encode($_POST['id_jadwal']);

        echo $_POST['id_jadwal'];
       
    }

    public function buka()
    {
        $id_jadwal = $_POST['id_jadwal'];
        $where = array('id_jadwal' => $id_jadwal);
        echo json_encode($this->Model_jadwal_penugasan->edit_jadwal_penugasan($where, 'jadwal_penugasan')->result());
        // $this->Model_jadwal_penugasan->edit_jadwal_penugasan($where, 'jadwal_penugasan')->result();
        // echo json_encode($_POST['id']);

        // echo $_POST['id'];
        // echo "ok";
    }

}
