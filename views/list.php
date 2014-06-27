<div class="main clearfix">
	<? foreach($products->items as $product): ?>
		<div class="product clearfix">
			<h2><?=$product['name']?></h2>
			<img src="<?=$product['image']?>" alt="<?=$product['name']?>"><br>
			<?=$product['description']?>

			<p class="price clearfix">$<?=$product['price']?></p>

			<?=Form::open('add_to_cart.php')?>
				<?=Form::hidden('id', $product['id'])?>
				<?=Form::label('quantity', 'Quantity:')?>
				<?=Form::number('quantity', '1', 'min="1"')?>
				<?=Form::submit('Order')?>
			<?=Form::close()?>
		</div>
	<? endforeach; ?>
</div>