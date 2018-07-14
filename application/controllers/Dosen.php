<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dosen extends CI_Controller {

	public function index()
	{
		echo "Hi Dosen";
		$this->load->view('dosen/header');
		$this->load->view('dosen/beranda');
		$this->load->view('dosen/footer');
	}
	// olah data dosen
	public function tabel_dosen()
	{
		echo "tabel dosen";
		$this->load->view('kta/header');
		$this->load->view('dosen/tabel_dosen');
		$this->load->view('kta/footer');
	}

	public function delete_dosen()
	{
		// echo "delete dosen";
		$this->db->select();
		$this->db->from('dosen');
		$this->db->delete('mytable', array('id' => $nidn));
	}
}
