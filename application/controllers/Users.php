<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {
	
	public function __construct() {
		parent::__construct();
		$this->load->helper('url');
		$this->load->model("usersmodel");
	}
	
	public function index()
	{
		$selectUsers = $this->usersmodel->get_users();
		$data["usuarios"] = $selectUsers;
		$this->load->view('users', $data);
		
	}
	
	public function profile($id)
	{
		$selectUsers = $this->usersmodel->get_user($id);
		$data["usuario"] = (object) $selectUsers;
		
	//	echo "<pre>";
		//print_r($data['usuario']['gender']);die;
		$this->load->view('profile', $data);
	}
	
}
