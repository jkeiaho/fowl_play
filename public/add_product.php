<?php

require_once '../libraries/database.lib.php';
require_once '../libraries/login.lib.php';
require_once '../libraries/form.lib.php';
require_once '../models/product.collection.php';
require_once '../models/product.model.php';
require_once '../libraries/cart.lib.php';
require_once '../libraries/upload.lib.php';

Login::kickout();

$form = new Form();
$title = 'Add Product';

#If the form was just posted
if($_POST){
	$product = new Product();

	$product->name 			= $_POST['name'];
	$product->description 	= $_POST['description'];
	$product->price 		= $_POST['price'];
	$product->category_id 	= $_GET['category_id'];

	$product->save();
}

$images = '';

	#( $_FILES );  #Super Global

	# If any files were uploaded
	if($_FILES){

		$uploaded_files = Upload::multiple_to_folder('uploads/');

	foreach($uploaded_files as $file){
		$images .= "<a href='$file'><img src='$file' height='100'></a>";
	}
		
}


include '../views/admin_header.php';
include '../views/add.php';
include '../views/footer.php';