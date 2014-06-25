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
           <?php if(Login::is_logged_in()): ?>
          <a href="logout.php">Logout</a>
          <? else: ?>
          <a href="login.php">Login</a>
        <? endif; ?>
   <a href="index.php">Home</a>
 </header>
<div class="container clearfix">
  <nav>
       <ul>
        <li><a href="edit_products.php?id=1">Birds</a> </li>
        <li><a href="edit_products.php?id=2">Cages</a> </li>      
        <li><a href="edit_products.php?id=3">Food</a> </li>      
       </ul>
       <div class="line"></div> 
     </nav>


     