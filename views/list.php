<div class="main">
	<? foreach($products->items as $product): ?>
		<div class="product">
			<img src="<?=$product['image']?>" alt="<?=$product['name']?>">
			<h2><?=$product['name']?></h2>
			<?=$product['description']?>

			<p class="price">$<?=$product['price']?></p>

			<?=Form::open('add_to_cart.php')?>
				<?=Form::hidden('id', $product['id'])?>
				<?=Form::label('quantity', 'Quantity:')?>
				<?=Form::number('quantity', '1', 'min="1"')?>
				<?=Form::submit('Order')?>
			<?=Form::close()?>
		</div>
	<? endforeach; ?>
</div>