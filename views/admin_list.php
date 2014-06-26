<div class="main">

	<a href="add_product.php">Add Product</a>

	<? foreach($products->items as $product): ?>
		<div class="product">
			
		<?=Form::open()?>

		<?=Form::hidden('id', $product['id'])?>
			
		<?=Form::label('name', 'Product Name:')?>
		<?=Form::text('name', $product['name'])?>

			<!-- Upload image -->
			<img src="<?=$product['image']?>" alt="<?=$product['name']?>"><br>
			

		<?=Form::label('description', 'Product Description:')?>
		<?=Form::textarea('description', $product['description'])?>

			
		<?=Form::label('price', 'Product Price:')?>
		<?=Form::number('price', $product['price'])?>
		

		<!-- <? /* =Form::label('category_id', 'Category:')?> 
		<?=Form::number('category_id', $product['catergory_id']) */?> --> 
		
		<?=Form::submit()?>
		
		

		<? if($_GET['id']): ?>
			<a href="delete_product.php?id=<?=$product['id']?>">
				Delete Product
			</a>
		<? endif; ?>

		<?=Form::close()?>

		</div>

	<? endforeach; ?>


</div>