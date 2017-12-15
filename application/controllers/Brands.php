<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Brands extends CI_Controller {
	
	public function __construct() {
		parent::__construct();
		$this->load->helper('url');
	}
	
	public function index()
	{
		
		$this->load->model("brandsmodel");
		
		$selectBrands = $this->brandsmodel->get_brands();
		
		$data["marcas"] = $selectBrands;
		
		$this->load->view('brands', $data);
		
	}
}
