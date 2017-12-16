<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	
	public function __construct() {
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('session');
		$this->load->model("loginmodel");
	}
	
	public function index()
	{
		$this->load->view('login');
	}
	
	public function logar(){
		$username  = filter_var($_POST['username'], FILTER_SANITIZE_STRING);
		$password  = filter_var($_POST['password'], FILTER_SANITIZE_STRING);
		
		$get_login = $this->loginmodel->get_login();
		
		$log = 0;
		foreach($get_login as $row){
			
			if($row->login->username == $username && $row->login->password == $password){
					$log++;
					$arr = array(
						'logado' => TRUE,
						'nome' => "".ucfirst ($row->name->title).' '.ucfirst($row->name->first).' '. ucfirst($row->name->last) .""
					);
			}
		}
		
		if($log > 0){
			
			$this->session->set_userdata($arr);
			
			if($_SESSION['logado'] === TRUE){
				redirect(base_url("index.php/interactions"));
			}else{
				redirect(base_url());
			}
		}else{
			redirect(base_url());
		}
		
	}
	
	public function logout(){
		
		$this->session->sess_destroy();
		redirect(base_url());
	}
}
