<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		echo "Hi Dosen";
		$this->load->view('dosen/header');
		$this->load->view('dosen/beranda');
		$this->load->view('dosen/footer');
	}

}
