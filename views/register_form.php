<?=Form::open()?>
	<div class="login">
		<h1>Register</h1>
	    <p>New customer? Register here:</p>
	<div class="row">
		<?=Form::label('username', 'Username:')?>
		<?=Form::input('text', 'username')?>
	</div>
	<div class="row">
		<?=Form::label('password', 'Password:')?>
		<?=Form::input('password', 'password')?>
	</div>
	<div class="row">
		<?=Form::label('confirm_password', 'Confirm Password:')?>
		<?=Form::input('password', 'confirm_password')?>
	</div>
	<div class="row">
		<?=Form::submit()?>
	</div>
<?=Form::close()?>