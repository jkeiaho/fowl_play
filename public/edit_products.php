<?php

require_once '../libraries/database.lib.php';
require_once '../libraries/login.lib.php';
require_once '../libraries/form.lib.php';
require_once '../models/product.collection.php';
require_once '../models/product.model.php';
require_once '../libraries/cart.lib.php';

Login::kickout();

$form = new Form();
$title = 'Edit Product';

# If the form was just posted
if($_POST){

	$product = new Product($_POST['id']);

	$product->name 			= $_POST['name'];
	$product->description 	= $_POST['description'];
	$product->price 		= $_POST['price'];

	$product->save();
}
$products = new Product_Collection($_GET['id']);


include '../views/admin_header.php';
include '../views/admin_list.php';
include '../views/footer.php';