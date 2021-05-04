<?php include('functions.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>C&C Calendar Sign In</title>
<link rel='stylesheet' type="text/css" href="style2.css" />
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<style>

body {
  background-image: url('background1.jpg');
  background-attachment: fixed;
  background-size: 100%;
  position: relative;
  background-position: center;
}

.login-form {
    width: 340px;
    margin: 50px auto;
  	font-size: 15px;
}
.login-form form {
    margin-bottom: 15px;
    background: #f7f7f7;
    box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    padding: 30px;
    background-color: #F0F8FF;
}
.login-form h2 {
    margin: 0 0 15px;
    background-color: #F0F8FF;
}
.form-control{
    min-height: 38px;
    border-width: .1px;
    position: relative;
  	font-size: 18px;
  	/* margin-left: 20px; */
    padding: 10px 20px;
    text-align: center;
  	/* background-color: #525B71; */
  	color: #525B71;
    text-decoration: none;
    outline: none;
    border-color: #000;
    /* -internal-light-dark(#F4AF74, #F4AF74); */
    /* display: inline-block; */
  	/* box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3); */
    margin-bottom: 5px;
}


.btn {
    font-size: 15px;
    font-weight: bold;
    position: relative;
  	font-size: 18px;
  	/* margin-left: 20px; */
    padding: 10px 20px;
    text-align: center;
  	background-color: rgba(0, 0, 0, 0);
    border-radius: 0px;
  	color: #525B71;
    text-decoration: none;
    display: inline-block;
  	box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    font-family: Optima;
    margin-top: 10px;
    border-color: rgba(0,0,0,0);
}

.btn:hover {
  background-color: #525B71;
  color: #F0F8FF;
}

.text-center {
  text-align: center;
	/* width: 90%; */
	margin-left: auto;
	margin-right: auto;
}

#signIn{
  font-family: Optima;
}

input.form-control{
  font-family: Optima;
  text-align: center;
	margin-left: auto;
	margin-right: auto;
}

div.form-group {
  text-align: center;
	/* width: 90%; */
	margin-left: auto;
	margin-right: auto;
}

a:link, a:visited {
	position: relative;
	font-size: 18px;
	/* margin-left: 20px; */
  padding: 10px 20px;
  text-align: center;
	/* background-color: #525B71; */
	color: #525B71;
  text-decoration: none;
  display: inline-block;
  /* background-color: #F4AF74; */
	box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
  font-family: Optima;
}

a:hover, a:active {
  background-color: #525B71;
  color: #F0F8FF;
}

</style>
</head>
<body>
<div class="login-form">
    <form method="post" action="sign_in.php">
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
    <p class="text-center"><a href="sign_up.php">Create an Account</a></p>
</div>
</body>
</html>
