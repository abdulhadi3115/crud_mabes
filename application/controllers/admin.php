<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Admin extends CI_Controller {
	function login(){		
		if(isset($_POST['submit'])) {			
			$username = $this->db->escape($_POST['username']);
			$password = $this->db->escape($_POST['password']);			
			$this->load->model("model_admin");
			$data = $this->model_admin->get_users_by_username_password($username,$password);
			if(!empty($data)){
				redirect("data");
			}else{
				echo "Gagal Masuk";
			}
		}
		$this->load->view('admin/login');
	}
}

