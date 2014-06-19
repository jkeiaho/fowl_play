<?php include ('../views/header.php') ; ?>
   
   	<div class="login">
	    <h1>Login</h1>
	    <p>Are you already registered?</p>
	    <p>Members login here:</p>
	    <form action="">
	    	<div class="row">
	    		<label for="Username">Username:</label>
	    		<input type="text">
	    	</div>

	    	<div class="row">
	    		<label for="Password">Password:</label>
	    		<input type="password">
	    	</div>

	    	<input type="submit" value="Login">
	    </form>
	 </div>

	 <div class="or">
	 	<p>or</p>
	 </div> 

	 <div class="register">
	 	<h1>Register</h1>
	 	<p>New customer? Register here:</p>
	 	<form action="">
	    	<div class="row">
	    		<label for="Username">Username:</label>
	    		<input type="text">
	    	</div>

	    	<div class="row">
	    		<label for="Password">Password:</label>
	    		<input type="password">
	    	</div>

	    	<div class="row">
	    		<label for="Password">Confirm Password:</label>
	    		<input type="password">
	    	</div>

	    	<input type="submit" value="Register">
	    </form>
	 </div>

<?php include ('../views/footer.php') ; ?>
	  
