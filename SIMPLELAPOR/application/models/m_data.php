<?php

class M_data extends CI_Model
{
    public function tampil_data()
    {
        $data = $this->db->query('select * from laporan')->result_array();
        return $data;
    }

    public function input_data($data,$table){
		$this->db->insert($table,$data);
	}
}
