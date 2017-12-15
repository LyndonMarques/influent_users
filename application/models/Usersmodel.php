<?php

class Usersmodel extends CI_Model {
	
	public function __construct() {
		parent::__construct();
	}
	
	public function get_users(){
		
		$urlfile = "application/models/data/users.json";
		
		$str_data = file_get_contents($urlfile);
		$data = json_decode($str_data);
		
		return $data;
	}
}