<?php

//require_once '../libraries/login.lib.php';

//Login::log_out();

//header('location: index.php');
//exit;


# filename: logout.php

session_start();

unset($_SESSION['logged_in']);

header('location: login.php');
exit;
