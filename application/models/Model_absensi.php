<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_absensi extends CI_Model
{
    public function tampil_data()
    {
        return $this->db->get('absensi');
    }

    public function tampil_absensi()
    {
        $tahun = date('Y');
        return $this->db->get_where('absensi', array('tahun' => $tahun));
    }

    public function tambah_absensi($data, $table)
    {
        $this->db->insert($table, $data);
    }

    public function edit_absensi($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    public function update_data($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    public function hapus_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
}
