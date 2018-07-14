<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$this->load->view('login');
	}

	public function proses_login()
	{

		$username=$this->input->post("username");
		$password=$this->input->post("password");

		$this->db->select();
		$this->db->from('login');
		$this->db->where('username', $username);
		$this->db->where('password', $password);
		$query = $this->db->get();
		$num = $query->num_rows(); 
		// echo json_encode($query->num_rows());

		if ($num > 0) {
			// echo "hi";
			// $query = $this->db->get('login'); 
			// echo json_encode($query->result());
			foreach ($query->result() as $row)
			{
				$akun = array(
					'username'  => $row->username,
					'akses'     => $row->akses,
					'logged_in' => TRUE
				);
				$this->session->set_userdata($akun);
				redirect('/beranda/');
				var_dump($akun);
			}
		}else{
			echo ":p";
		}
	}
	public function tabel_user()
	{
		$data['data_user']=$this->db->get('login');
		// echo "tabel dosen";
		$this->load->view('kta/header');
		$this->load->view('kta/tabel_user', $data);
		$this->load->view('kta/footer');
	}
}
