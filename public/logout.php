<?php

require_once '../libraries/cart.lib.php';

//Login::log_out();

//header('location: index.php');
//exit;


# filename: logout.php

session_start();

unset($_SESSION['logged_in']);

Cart::clear($product_id, $quantity);

header('location: index.php');
exit;
