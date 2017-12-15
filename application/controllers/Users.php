<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {
	
	public function __construct() {
		parent::__construct();
		$this->load->helper('url');
	}
	
	public function index()
	{
		
		$this->load->model("usersmodel");
		
		$selectUsers = $this->usersmodel->get_users();
		
		$data["usuarios"] = $selectUsers;
		
		$this->load->view('users', $data);
		
	}
}
