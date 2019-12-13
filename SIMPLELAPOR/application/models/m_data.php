<?php
class M_data extends CI_Model
{
    public function tampil_data()
    {
        $data = $this->db->query('select * from laporan')->result_array();
        return $data;
    }

    public function input_data($data, $table)
    {
        $this->db->insert($table, $data);
    }

    public function tampil()
    {
        $query = $this->db->get('laporan');
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
        }
    }

    function per_id($id_laporan)
    {
        $this->db->where('id_laporan', $id_laporan);
        $query = $this->db->get('laporan');
        return $query->result();
    }
}
