<?php

require_once '../libraries/database.lib.php';
require_once '../libraries/config.lib.php';
require_once '../libraries/form.lib.php';
require_once '../models/model.lib.php';
require_once '../models/cart.lib.php';
require_once '../models/product.collection.php';

if($_GET['id']){
	$cat_id = $_GET['id'];
}else{
	$cat_id = 1;
}

$cat = new Cat($cat_id);

include '../views/header.php';
include '../views/list.php';
include '../views/footer.php';

