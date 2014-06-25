<?=Form::open()?>
	<div class="login">
	    <h1>Admin Login</h1>
	<div class="row">
		<?=Form::label('username', 'Username:')?>
		<?=Form::input('text', 'username')?>
	</div>
	<div class="row">
		<?=Form::label('password', 'Password:')?>
		<?=Form::input('password', 'password')?>
	</div>

	<div class="row">
		<?=Form::submit()?>
	</div>

	<?php if($error): ?>
	<p class="error"><?=$error?></p>
<?php endif; ?>

<?=Form::close()?>