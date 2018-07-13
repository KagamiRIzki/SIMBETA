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
		// echo $username;
		// echo $password;

		$this->db->select();
		$this->db->from('login');
		$this->db->where('username', $username);
		$this->db->where('password', $password);
		$query = $this->db->get()->num_rows(); 
		// echo json_encode($query->num_rows());

		if ($query > 0) {
			echo "hi";
			$query = $this->db->get('login'); 
			echo json_encode($query->result());
			foreach ($query->result() as $row)
			{
				
			}
		}else{
			echo ":p";
		}

		// $query = $this->db->get('login'); 
		// echo json_encode($query->result());
		// foreach ($query->result() as $row)
		// {
		// }
	}
}
