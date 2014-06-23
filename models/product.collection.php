<?php

require_once '../libraries/config.lib.php';

class Product_Collection{

	public $items = array();
	private $db;

	public function __construct($id = false){
		$this->db = new Database(
			Config::$hostname,
			Config::$username,
			Config::$password,
			Config::$database
		);

		$this->db->select('*')->from('tb_products');

		if($id){
			$this->db->where('category_id', $id);
		}
			
		$this->items = $this->db->get();
	}
}