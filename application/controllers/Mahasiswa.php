<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {

	public function index()
	{
		echo "hi mahasiwa";
		$this->load->view('dosen/header');
		$this->load->view('dosen/beranda');
		$this->load->view('dosen/footer');
	}
}
