<?php

require_once '../libraries/database.lib.php';
require_once '../libraries/login.lib.php';
require_once '../models/product.collection.php';
require_once '../libraries/cart.lib.php';

Login::kickout();

include '../views/admin_header.php';
include '../views/admin_home.php';
include '../views/footer.php';