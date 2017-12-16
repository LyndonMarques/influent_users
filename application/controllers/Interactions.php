<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Interactions extends CI_Controller {
	
	public function __construct() {
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('session');
		$this->load->model("interactionmodel");
		if($_SESSION['logado'] != TRUE){
			redirect(base_url());
		}
		
	}
	
	public function index()
	{
		$selectIteractions  = $this->interactionmodel->get_interactions();
		$data["interacoes"] = $selectIteractions;
		$this->load->view('interactions', $data);
	}
}
