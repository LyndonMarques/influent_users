<?php

class Interactionmodel extends CI_Model {
	
	public function __construct() {
		parent::__construct();
	}
	
	public function get_interactions(){
		
		$urlfileinteractions  = "application/models/data/interactions.json";
		$urlfilebrands        = "application/models/data/brands.json";
		$urlfileusers         = "application/models/data/users.json";
		
		$str_data_iteractions = file_get_contents($urlfileinteractions);
		$str_data_brands      = file_get_contents($urlfilebrands);
		$str_data_users       = file_get_contents($urlfileusers);
		
		$data_iteractions     = json_decode($str_data_iteractions, true);
		$data_brands          = json_decode($str_data_brands, true);
		$data_users           = json_decode($str_data_users, true);
		
		
		foreach($data_iteractions as $key => $row){
			//---------------------------Brands---------------------------//
			//Id da marca no arquivo interactions.json
			$id_brand             = $data_iteractions[$key]['brand'];
			//Pega id da marca relacionado ao id brand no arquivo interations.json
			$getBrandsKey         = $this->searchForId($id_brand, $data_brands);
			//Inseri a key marca com todos os dados da marca no array interactions
			$data_iteractions[$key]['marcas'] = $data_brands[$getBrandsKey];
			//---------------------------Users---------------------------//
			//Id do usuario no arquivo interactions.json
			$id_users             = $data_iteractions[$key]['user'];
			//Pega id do usuário relacionado ao id users no arquivo interations.json
			$getUsersKey         = $this->searchForId($id_users, $data_users);
			//Inseri a key usuarios com todos os dados do usuário no array interactions
			$data_iteractions[$key]['usuarios'] = $data_users[$getUsersKey];
		}
		
		return $data_iteractions;
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