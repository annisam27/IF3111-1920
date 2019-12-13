<?php 


class Crud extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('m_data');
		$this->load->helper('url');

	}

	function index(){
		$data['laporan'] = $this->m_data->tampil_data()->result();
		$this->load->view('v_tampil',$data);
	}

	function tambah(){
		$this->load->view('depan');
	}

	function tambah_aksi(){
		$Laporan_Komentar = $this->input->post('Laporan_Komentar');
		$Aspek = $this->input->post('Aspek');
		$Lampiran = $this->input->post('Lampiran');

		$data = array(
			'Laporan_Komentar' => $Laporan_Komentar,
			'Aspek' => $Aspek,
			'Lampiran' => $Lampiran
			);
		$this->m_data->input_data($data,'laporan');
		redirect('crud/index');
	}

	function hapus($id_laporan){
		$where = array('id' => $id_laporan);
		$this->m_data->hapus_data($where,'laporan');
		redirect('crud/index');
	}

}