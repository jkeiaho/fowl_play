<div class="main">
	
	<?=Form::open()?>

	
		<?=Form::label('file','File:')?>
		<?=Form::input('file','file[]','multiple')?>
			
		
		<?=Form::label('name', 'Product Name:')?>
		<?=Form::text('name')?>
		
		<?=Form::label('description', 'Product Description:')?>
		<?=Form::textarea('description')?>

			
		<?=Form::label('price', 'Product Price:')?>
		<?=Form::number('price')?>
		

		<?=Form::label('category_id', 'Category:')?> 
		<?=Form::number('category_id')?> 
		
		<?=Form::submit()?>
		
		

		<? if($_GET['id']): ?>
			<a href="delete_product.php?id=<?=$product['id']?>">
				Delete Product
			</a>
		<? endif; ?>

	<?=Form::close()?>


</div>