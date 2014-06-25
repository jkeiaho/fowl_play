<?php

session_start();

require_once '../libraries/database.lib.php';
require_once '../libraries/form.lib.php';
require_once '../libraries/login.lib.php';
require_once '../models/admin.model.php';
require_once '../models/product.collection.php';
require_once '../libraries/cart.lib.php';

$form = new Form();

if($_POST){
	$user = new Admin();

	$user->username = $_POST['username'];
	$user->password = $_POST['password'];

	if($user->authenticate()){
		Login::log_in();
		header('location: admin.php');
		exit;
	}else{
		$error = 'Incorrect Username or Password';
	}
}

include '../views/header.php';
include '../views/admin_form.php';
include '../views/footer.php';
