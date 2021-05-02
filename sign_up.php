<?php include('functions.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<title>C&C Calendar Sign Up</title>
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
div#plsCenter {
	position:relative;
	border: 2px solid #384267;
	background-color: #384267;
	font-size: 30px;
	margin-top: 20px;
	font-weight: bolder;
	color: #FFF;
	text-align: center;
}
/* .form-control {
	height: 41px;
	background: #f2f2f2;
	box-shadow: none !important;
	border: none;
}
.form-control:focus {
	background: #e2e2e2;
}
.form-control, .btn {
	border-radius: 3px;
} */
.signup-form {
	width: 400px;
	margin: 30px auto;
}
.signup-form form {
	color: #999;
	border-radius: 3px;
	margin-bottom: 15px;
	background: #fff;
	/* box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3); */
	padding: 30px;
	/* position:relative; */
	border: 2px solid #384267;
	background-color: #384267;
	font-size: 30px;
	margin-top: 20px;
	font-weight: bolder;
	color: #FFF;
	text-align: center;
}
/* .signup-form h2  {
	color: #333;
	font-weight: bold;
	margin-top: 0;
}
.signup-form hr  {
	margin: 0 -30px 20px;
}
.signup-form .form-group {
	margin-bottom: 20px;
}
.signup-form input[type="checkbox"] {
	margin-top: 3px;
}
.signup-form .row div:first-child {
	padding-right: 10px;
}
.signup-form .row div:last-child {
	padding-left: 10px;
}
.signup-form .btn {
	font-size: 16px;
	font-weight: bold;
	background: #3598dc;
	border: none;
	min-width: 140px;
}
.signup-form .btn:hover, .signup-form .btn:focus {
	background: #2389cd !important;
	outline: none;
}
.signup-form a {
	color: #fff;
	text-decoration: underline;
}
.signup-form a:hover {
	text-decoration: none;
}
.signup-form form a {
	color: #3598dc;
	text-decoration: none;
}
.signup-form form a:hover {
	text-decoration: underline;
}
.signup-form .hint-text  {
	padding-bottom: 15px;
	text-align: center;
} */
</style>
</head>
<body>
<!-- <div id="plsCenter" > -->
<div class="signup-form">
    <form method="post" action="sign_up.php">
		<h2>Sign Up</h2>
		<p>Please fill in this form to create an account!</p>
		<hr>
        <div class="form-group">
			<div class="row">
				<div class="col"><input type="text" class="form-control" name="username" placeholder="Username" ></div>
			</div>
        </div>
		<div class="form-group">
            <input type="password" class="form-control" name="password" placeholder="Password">
        </div>
		<div class="form-group">
			<?php echo display_error(); ?>
            <input type="submit" class="btn btn-primary btn-lg" value="Sign Up" name="register_btn"/>
        </div>
    </form>
	<div class="hint-text">Already have an account? <a href="sign_in.php">Login here</a></div>
</div>
<!-- </div> -->
</body>
</html>