<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		echo "hi KTA";
		$this->load->view('dosen/header');
		$this->load->view('dosen/beranda');
		$this->load->view('dosen/footer');
	}
// olah data dosen
	public function data_dosen();
	{
		echo "tabel dosen";
		$this->load->view('dosen/header');
		$this->load->view('tabel_dosen');
		$this->load->view('dosen/footer');
	}

	public function delete_dosen();
	{
		echo "delete dosen";
		
	}
}
