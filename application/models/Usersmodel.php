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
	
	public function get_user($id){
		
		$urlfile = "application/models/data/users.json";
		
		$str_data = file_get_contents($urlfile);
		$data = json_decode($str_data, true);
		
		$id = $this->searchForId((int)$id, $data);
		
		return $data[$id];
	}
	
	function searchForId($id, $array) {
		foreach ($array as $key => $val) {
			if ($val['id'] === $id) {
				return $key;
			}
		}
		return null;
	}
}