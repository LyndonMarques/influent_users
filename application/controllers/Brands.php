<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Brands extends CI_Controller {
	
	public function __construct() {
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('session');
		$this->load->model("brandsmodel");
		if($_SESSION['logado'] != TRUE){
			redirect(base_url());
		}
	}
	
	public function index()
	{
		$selectBrands = $this->brandsmodel->get_brands();
		$data["marcas"] = $selectBrands;
		$this->load->view('brands', $data);
		
	}
}
