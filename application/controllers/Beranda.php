<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends CI_Controller {

	public function index()
	{
		$akses = $this->session->userdata('akses');
		if ($akses=="kta") {
			# code...
			$this->load->view('kta/beranda');
		}elseif ($akses=="dosen") {
			# code...
			$this->load->view('dosen/beranda');
		}elseif ($akses=="mhs") {
			# code...
			$this->load->view('mhs/beranda');
		}
	}
}
