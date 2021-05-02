<?php include('functions.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Bootstrap Simple Login Form</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<style>

body {
  background-image: url('background.jpg');
  background-attachment: fixed;
  background-size: 100%;
  position: relative;
}
a:link, a:visited {
	position: relative;
	font-size: 18px;
	margin-left: 20px;
  padding: 10px 20px;
  text-align: center;
	/* background-color: #909b55; */
	color: #909b55;
  text-decoration: none;
  display: inline-block;
}

a:hover, a:active {
  background-color: #909b55;
  color: #19252d;
}
.login-form {
    width: 340px;
    margin: 50px auto;
  	font-size: 15px;
}
.login-form form {
    margin-bottom: 15px;
    background: #f7f7f7;
    /* box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3); */
    padding: 30px;
}
.login-form h2 {
    margin: 0 0 15px;
}
.form-control, .btn {
    min-height: 38px;
    border-radius: 2px;
}
.btn {
    font-size: 15px;
    font-weight: bold;
}
</style>
</head>
<body>
<div class="login-form">
    <form method="post" action="login.php">
        <h2 class="text-center">Log in</h2>
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Username" name="username">
        </div>
        <div class="form-group">
            <input type="password" class="form-control" placeholder="Password" name="password">
        </div>
        <div class="form-group">
            <?php echo display_error(); ?>
            <input type="submit" class="btn btn-primary btn-block" value="Sign In" name="login_btn"/>
        </div>
    </form>
    <p class="text-center"><a href="sign_up.html">Create an Account</a></p>
</div>
</body>
</html>
