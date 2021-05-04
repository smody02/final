<?php include('functions.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel='stylesheet' type="text/css" href="style2.css" />
<title>C&C Calendar Sign Up</title>
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
.row{
	position: relative;
	height: 100%;
	/* margin-top: 10px; */
	padding-bottom: 0px;
}
.signup-form {
    width: 340px;
    margin: 50px auto;
  	font-size: 15px;
}
.signup-form form {
    margin-bottom: 15px;
    background: #f7f7f7;
    box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    padding: 30px;
    background-color: #F0F8FF;
}
.signup-form h2 {
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
    /* -internal-light-dark(#233C63, #233C63); */
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
  /* background-color: #233C63; */
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
