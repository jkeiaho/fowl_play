<?php

require_once '../libraries/config.class.php';
require_once '../libraries/hash.class.php';

class User{

	# Properties

	public $id = 0;
	public $email = '';
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
			->select('id, email, password')
			->from('tb_users')
			->where('id', $id)
			->get_one();

		$this->id       = $id;
		$this->email    = $result['email'];
		$this->password = $result['password'];
	}

	public function save(){
		if($this->id == 0){

			$success = $this->db
				->set(array(
					'email'    => $this->email,
					'password' => Hash::make_password($this->password), # encrypts password before inserting into the db.
					'salt'	   => Hash::salt()
				))
				->insert('tb_users');


			$this->id = $this->db->last_insert_id;
			
		}else{
			$success = $this->db
				->set(array(
					'email'    => $this->email,
					'password' => Hash::make_password($this->password), # encrypts password before inserting into the db.
					'salt'	   => Hash::salt()
				))
				->where('id', $this->id)
				->update('tb_users');
		}
		return $success;
	}

	public function authenticate(){

		$user = $this->db
			->select('salt')
			->from('tb_users')
			->where('email', $this->email)      # Find out what the salt is using the email address.
			->get_one();

		$encrypted_pw = Hash::encrypt(
			$this->password,					# matching salt with password?
			$user['salt']
			);	

		$result = $this->db
			->select('id')
			->from('tb_users')
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