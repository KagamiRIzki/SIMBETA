<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kta extends CI_Controller {

	public function index()
	{
		echo "hi KTA";
		$this->load->view('kta/header');
		$this->load->view('kta/beranda');
		$this->load->view('kta/footer');
	}

}
