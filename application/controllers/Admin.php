<?php 
/**
 * 
 */
class Admin extends CI_controller
{
	
	function __construct()
	{
		parent ::__construct();
		$this->load->helper(array('url','form'));
		$this->load->model("model_admin");
	}
	function index() {
		$data['judul']="Database dalam CI";
		$data['isi']="CRUD Data Admin";
		$data['data']=$this->model_admin->get();
		$this->load->view("view_admin", $data);
	}
	function addadmin() {
		$id=$this->input->post('id', true);
		$username=$this->input->post('username', true);
		$password=$this->input->post('password', true);
		$this->model_admin->simpan($id,$username,$password);
		redirect('admin');
	}
	function edit() {
		$data['judul']="Database dalam CI";
		$data['isi']="Edit Data Admin";
		$id=$this->uri->segment(3);
		$data['data']=$this->model_admin->edit($id);
		$this->load->view("edit_admin", $data);
	}
	function edit_submit() {
		$id=$this->input->post('id', true);
		$username=$this->input->post('username', true);
		$password=$this->input->post('password', true);
		$this->model_admin->update($id,$username,$password);
		redirect('admin');
	}
	function delete() {
		$id=$this->uri->segment(3);
		$this->model_admin->delete($id);
		redirect('admin');
	}
}

 ?>