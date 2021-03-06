<div class="main">

	<table>
		<tr>
			<th>Image</th>
			<th width="550">Name</th>
			<th width="80">Price</th>
			<th width="130">Quantity</th>
			<th width="120">Total Price</th>
			<th></th>
		</tr>
		<?php if(count($cart_products)): ?>
			<?php foreach($cart_products as $product): ?>
			<tr>
				<td><img src="<?=$product['image']?>"></td>
				<td><?=$product['name']?></td>
				<td>$<?=$product['price']?></td>
					<td>
						<?=Form::open('update_quantity.php')?>
							<?=Form::hidden('id', $product['id'])?>
							<?=Form::number('quantity', $product['quantity'], 'min="1"')?>
							<?=Form::submit('Save')?>
						<?=Form::close()?>
					</td>
				<td>$<?=$product['total_price']?></td>
				<td><a href="remove_from_cart.php?id=<?=$product['id']?>">Remove</a></td>
			</tr>
			<?php endforeach ?>
		<?php else: ?>
			<tr>
				<td colspan="6">There are no items in the cart</td>
			</tr>
		<?php endif; ?>
	</table>

	<p class="total">Grand Total: $<?=$grand_total?></p>

	<div class="buttoncheck">
		<a href="checkout.php">Checkout</a>
	</div>
</div>