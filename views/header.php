<!doctype html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <title>Fowl Play</title>
 <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
 
<header>
   <h1>Fowl Play</h1>
   <a href="cart.php">Cart (<?=Cart::get_total()?>)</a>
        <?php if(Login::is_logged_in()): ?>
          <a href="logout.php">Logout</a>
          <? else: ?>
          <a href="login.php">Login</a>
        <? endif; ?>
   <a href="index.php">Home</a>
   <a href="register.php">Register</a>
 </header>

<div class="container clearfix">
  <nav class="navi">
       <ul>
        <li><a href="products.php?id=1">Birds</a> </li>
        <li><a href="products.php?id=2">Cages</a> </li>      
        <li><a href="products.php?id=3">Food</a> </li>      
       </ul>
       <div class="line"></div> 
     </nav>


     