<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Web extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('text');
		$this->load->model('m_data');
		//$this->load->model('model_baca');
	}

	public function index()
	{
		$data['laporan'] = $this->m_data->tampil_data();
		$data['judul'] = "Halaman depan";
		$data['data'] = $this->m_data->tampil();
		$this->load->view('v_header', $data);
		//$this->load->view('depan', $data);
		$this->load->view('v_tampil', $data);
		$this->load->view('v_footer', $data);
	}
	
	public function depan(){		
        $data['judul'] = "Halaman depan";
        $this->load->view('v_header',$data);
        $this->load->view('depan',$data);
        $this->load->view('v_footer',$data);
	}

	public function login()
	{
		$data['judul'] = "Login";
		$this->load->view('v_header', $data);
		$this->load->view('v_login', $data);
		$this->load->view('v_footer', $data);
	}
	public function akun()
	{
		$data['judul'] = "Akun";
		$this->load->view('v_header', $data);
		$this->load->view('v_akun', $data);
		$this->load->view('v_footer', $data);
	}
	public function v_tampil()
	{
		$data['judul'] = "Akun";
		$this->load->view('v_header', $data);
		$this->load->view('v_tampil', $data);
		$this->load->view('v_footer', $data);
	}
	public function selanjutnya()
	{
		$id = $this->uri->segment(3);
		$data['data'] = $this->m_data->per_id($id);
		$this->load->view('selanjutnya', $data);
	}
}
