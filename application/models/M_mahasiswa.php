<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_mahasiswa extends CI_Model
{
    // ambil_data_model
    public function ambil_data_model($data)
    {
        return $this->db->get($data);
    }

    // tambah_data_model
    public function tambah_data_model($table, $data)
    {
        $this->db->insert($table, $data);
    }

    // hapus_data_model
    public function hapus_data_model($table, $where)
    {
        $this->db->delete($table, $where);
    }

    // edit_data_model
    public function edit_data_model($table, $where)
    {
        return $this->db->get_where($table, $where);
    }

    // update_data_model
    public function update_data_model($table, $data, $where)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
}
