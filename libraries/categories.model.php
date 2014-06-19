<?php

require_once '../libraries/config.class.php';

class Subject{

	# Properties -----------------------------------

	public $id 		= 0;
	public $name 	= '';
	public $deleted = 0;
	private $db 	= null;

	# Magic methods --------------------------------

	# function __construct($id = 0){
	# 	$this->db = new Database(
	# 		'localhost',
	# 		'jameskei_cmsuser',
	# 		'cms123',
	# 		'jameskei_cms'
	# 	);

	function __construct($id = 0){
		$this->db = new Database(
			Config::$hostname,
			Config::$username,
			Config::$password,
			Config::$database
		);

		if($id){
			$result = $this->db
				->select('id, name, deleted')
				->from('tb_subjects')
				->where('id', $id)
				->get_one();

			$this->id 		= $result['id'];
			$this->name 	= $result['name'];
			$this->deleted 	= $result['deleted'];

		}
	}

	# Normal methods --------------------------------

	public function save(){
		# If this id is 0, then no page has been already loaded
		if($this->id == 0 && $this->name != ''){
			$this->db
				->set(array(
					'name'		=> $this->name,
					'deleted'	=> $this->deleted
				))
				->insert('tb_subjects');
		}else{
			$this->db
			->set(array(
				'name'	  => $this->name,
				'deleted' => $this->deleted
			))
			->where('id', $this->id)
			->update('tb_subjects');
		}
	}

	
	public function delete(){
		$this->deleted = 1;
		$this->save();
	}





}