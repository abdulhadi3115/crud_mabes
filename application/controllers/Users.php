<?php
Class Users extends CI_Controller{
	function index(){
		$data = array ();
		$this->load->model("model_users");
		$data['list_users'] = $this->model_users->get_users();
		$this->load-> view("data_users",$data);
	}

	public function add(){
		$this->load->model("model_users");
		$data['tipe'] = "Add";
		if(isset($_POST['tombol_submit'])){
		//proses simpan dilakukan
		$this->model_users->simpan($_POST);
		redirect("users");
		}
		$this->load->view("form_user",$data);
	}

	public function edit($id){
		$this->load->model("model_users");
		$data['tipe'] = "Edit";
		$data['default'] = $this->model_users->get_default($id);

		if(isset($_POST['tombol_submit'])){
		$this->model_users->update($_POST, $id);
		redirect("users");
		}
		$this->load->view("form_user",$data);
	}

	public function delete($id){
		$this->load->model("model_users");
		$this->model_users->hapus($id);
		redirect("users");
	}
}