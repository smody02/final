<?php include('functions.php') ?>
<!DOCTYPE html>
<html>
<head>
<meta content="charset=utf-8" />
<title>Connect Test Login</title>
</head>
<body>
    
    <div class="header">
		<h2>Login</h2>
	</div>
	<form method="post" action="login.php">

		<?php echo display_error(); ?>

		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" >
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password">
		</div>
		<div class="input-group">
			<input type="submit" value="Login" name="login_btn"/>
		</div>
		<p>
			Not yet a member? <a href="testConnect.php">Sign up</a>
		</p>
	</form>
    
</body>

</html>
