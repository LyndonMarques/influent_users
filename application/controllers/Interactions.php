<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Interactions extends CI_Controller {
	
	public function __construct() {
		parent::__construct();
		$this->load->helper('url');
		$this->load->model("interactionmodel");
	}
	
	public function index()
	{
		$selectIteractions = $this->interactionmodel->get_interactions();
		$data["interacoes"] = $selectIteractions;
		
		echo "<pre>";
		print_r($data);die;
		$this->load->view('interactions', $data);
	}
}
