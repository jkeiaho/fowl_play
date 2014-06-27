<?php

session_start();

require_once '../libraries/database.lib.php';
require_once '../libraries/config.lib.php';
require_once '../libraries/form.lib.php';
require_once '../libraries/model.lib.php';
require_once '../libraries/cart.lib.php';
require_once '../libraries/login.lib.php';

if($_SESSION['logged_in'] == true){

Cart::clear($product_id, $quantity);

}else{
	
	header('location: login.php');
	exit;

}

include "../views/header.php";
include "../views/checked_out.php";
include "../views/footer.php";
