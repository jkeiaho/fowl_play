<?php include ('../views/header.php') ; ?>
<div class="main">
  <h1>Cages</h1>
    <form action="add_to_cart.php">
      <div class="box">
        <h4>Fortress II Playtop Bird Cage</h4>
        <p>Dimensions: 22" x 18" x 62"<br>Bar Spacing: 3/4"</p>
        <img src="assets/images/cage1.jpg" alt="Cage" />
        <h4 class="price">Price $125.25</h4>  
        <input type="hidden" name="id" value="1" ><strong class="qty">Qty</strong>
        <input type="number" name="quantity" min="1" />&nbsp;&nbsp;
        <input type="submit" value="Add to Cart" class="button">
      </div>
      <div class="box">
      <h4>Classico XL Playtop Bird Cage</h4>
        <p>Dimentions: 24" x 22" x 67"<br>Bar Spacing 5/8"</p>
          <img src="assets/images/cage2.jpg" alt="Cage" />
          <h4 class="price">Price $269.96</h4>  
          <input type="hidden" name="id" value="1" ><strong class="qty">Qty</strong>
          <input type="number" name="quantity" min="1" />&nbsp;&nbsp;
          <input type="submit" value="Add to Cart" class="button">
      </div>
      <div class="box">
        <h4 >Double Deluxe Flight Cage</h4>
        <p>Dimensions: 64" x 21" x 59"<br>Bar Spacing 1/2"</p>
         <img src="assets/images/cage3.jpg" alt="Cage" />
          <form action="add_to_cart.php">
          <h4 class="price">Price $1,500.96</h4>  
          <input type="hidden" name="id" value="1" ><strong class="qty">Qty</strong>
          <input type="number" name="quantity" min="1" />&nbsp;&nbsp;
          <input type="submit" value="Add to Cart" class="button">
      </div>
    </form>
</div>
<?php include ('../views/footer.php') ; ?>