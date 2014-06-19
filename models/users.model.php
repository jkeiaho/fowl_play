<?php

require_once '../libraries/config.class.php';
require_once '../libraries/hash.class.php';

class User{

	# Properties

	public $id = 0;
	public $username = '';
	public $password = '';

	private $db;


	# Magic Methods
	public function __construct($id = 0){
		$this->db = new Database(

			Config::$hostname,
			Config::$username,
			Config::$password,			# required from from config.class.php
			Config::$database

			# 'localhost', 'davidsai_admin', 'admin', 'davidsai_login'
			);

		if($id){
			$this->load($id);
		}
	}


	# Normal Methods

	public function load($id){
		$result = $this->db
			->select('id, username, password')
			->from('tb_customers')
			->where('id', $id)
			->get_one();

		$this->id       = $id;
		$this->username = $result['username'];
		$this->password = $result['password'];
	}

	public function save(){
		if($this->id == 0){

			$success = $this->db
				->set(array(
					'username' => $this->username,
					'password' => Hash::make_password($this->password), # encrypts password before inserting into the db.
					'salt'	   => Hash::salt()
				))
				->insert('tb_customers');


			$this->id = $this->db->last_insert_id;
			
		}else{
			$success = $this->db
				->set(array(
					'username' => $this->username,
					'password' => Hash::make_password($this->password), # encrypts password before inserting into the db.
					'salt'	   => Hash::salt()
				))
				->where('id', $this->id)
				->update('tb_customers');
		}
		return $success;
	}

	public function authenticate(){

		$user = $this->db
			->select('salt')
			->from('tb_customers')
			->where('username', $this->username)      # Find out what the salt is using the username address.
			->get_one();

		$encrypted_pw = Hash::encrypt(
			$this->password,					# matching salt with password?
			$user['salt']
			);	

		$result = $this->db
			->select('id')
			->from('tb_customers')
			->where('password', $encrypted_pw) #
			->get_one();

		if($result['id']){
			$this->id = $result['id'];
			return true;
		}else{
			return false;
		}
	}

	public function delete(){
		$this->deleted = 1;
		$this->save();
	}

}