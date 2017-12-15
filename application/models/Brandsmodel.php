<?php

class Brandsmodel extends CI_Model {
	
	public function __construct() {
		parent::__construct();
	}
	
	public function get_brands(){
		
		$urlfile = "application/models/data/brands.json";
		
		$str_data = file_get_contents($urlfile);
		$data = json_decode($str_data,true);
		
		return $data;
	}

}