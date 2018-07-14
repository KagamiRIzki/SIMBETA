<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {

	public function index()
	{
		echo "hi mahasiwa";
		$this->load->view('mhs/header');
		$this->load->view('mhs/beranda');
		$this->load->view('mhs/footer');
	}
	public function tabel_mahasiswa()
	{	
		$data['data_mhs']=$this->db->get('mahasiswa');

		$this->load->view('kta/header');
		$this->load->view('mhs/tabel_mhs',$data);
		$this->load->view('kta/footer');
		// echo "mahasiswa";
	}
}
