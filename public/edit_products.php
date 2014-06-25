<?php

require_once '../libraries/database.lib.php';
require_once '../libraries/login.lib.php';
require_once '../libraries/form.lib.php';
require_once '../models/product.collection.php';
require_once '../libraries/cart.lib.php';

Login::kickout();

$form = new Form();
$title = 'Edit Page';
$page = new Page($_GET['id']);

# If the form was just posted
if($_POST){

	$page->name = $_POST['name'];
	$page->content = $_POST['content'];

	$page->save();
}


include '../views/admin_header.php';
include '../views/admin_list.php';
include '../views/footer.php';