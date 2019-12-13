<?php

class M_data extends CI_Model
{
    public function tampil_data()
    {
        $data = $this->db->query('select * from laporan')->result_array();
        return $data;
    }
}
