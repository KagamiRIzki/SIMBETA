<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		echo "hi KTA";
		$this->load->view('kta/header');
		$this->load->view('kta/beranda');
		$this->load->view('kta/footer');
	}
// olah data dosen
	public function data_dosen();
	{
		echo "tabel dosen";
		$this->load->view('kta/header');
		$this->load->view('tabel_dosen');
		$this->load->view('kta/footer');
	}

	public function delete_dosen();
	{
		echo "delete dosen";
		$this->db->select();
		$this->db->from('dosen');
		
	}
}
