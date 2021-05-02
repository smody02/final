<?php include('functions.php') ?>
<!DOCTYPE html>
<html>
<head>
<meta content="charset=utf-8" />
<title>Connect Test</title>
</head>
<body>
    
    <div class="header">
	<h2>Register</h2>
    </div>
    <form method="post" action="testConnect.php">
	<div class="input-group">
		<label>Username</label>
		<input type="text" name="username">
	</div>
	<div class="input-group">
		<label>Password</label>
		<input type="password" name="password">
	</div>
	<div class="input-group">
        <input type="submit" value="Register User" name="register_btn"/>
	</div>
	<p>
		Already a member? <a href="login.php">Sign in</a>
	</p>
    
</form>
    
</body>

</html>
