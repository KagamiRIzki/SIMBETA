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
		
		$data['data_dosen']=$this->db->get('dosen');
		// echo "tabel dosen";
		$this->load->view('kta/header');
		$this->load->view('dosen/tabel_dosen', $data);
		$this->load->view('kta/footer');
		
		// foreach ($data['data_dosen']->result() as $row)
		// {
        // 	echo $row->nidn;
		// }
		// $this->db->select();
		// $this->db->from('dosen');
	}

	public function delete_dosen()
	{
		// echo "delete dosen";
		$this->db->select();
		$this->db->from('dosen');
		$this->db->delete('mytable', array('id' => $nidn));
	}
}
