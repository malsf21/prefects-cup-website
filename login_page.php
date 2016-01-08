<?php
	require("common.php");
	if(!empty($_SESSION['user'])){ 
		header("Location: control.php"); 
		die("Redirecting to control.php"); 
	}
?> 
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<meta name="description" content="Prefects Cup">
		<meta name="author" content="">
		<title>Login| Prefects Cup</title>
		<link rel="icon" href="css/favicon.ico" />
		<link href="css/bootstrap.css" rel="stylesheet" />
		<link href="css/base.css" rel="stylesheet"  />
		<script src="js/google_analytics.js"></script>
	</head>
<body>
	<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-login">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand page-scroll" href="#page-top">Prefects Cup Control Panel</a>
			</div>

			<div class="collapse navbar-collapse navbar-login">
				<ul class="nav navbar-nav">
					<li><a href="index.php">Back to Home</a></li>
					<li><a href="register_page.php">Register</a></li>
					<li><a href="login_page.php">Login</a></li>
				</ul>
			</div>
		</div>
	</nav> 

	<?php include_once("footer.php") ?>
	<div class="section-one">
	<div class="container">
		<h1>Account Login</h1>
		<h3>Don't have an account? <b><a href="mailto:matthew.wang@ucc.on.ca">Contact Matthew Wang</a></b>.</h3>
		<form class="form-signin" action="login_function.php" method="post">
			<div class = "row">
				<div class = "col-md-12">
					<input type="email" id="email" class="form-control" placeholder="john.smith@ucc.on.ca" name="email" required="" autofocus="">
				</div>
			</div>
			<div class = "row">
				<div class = "col-md-12">
					<input type="password" id="password" name="password" class="form-control" placeholder="Password" required="">
				</div>
			</div>
			</br>
			<div class = "row">
				<div class = "col-md-12">
					<button class="btn btn-lg btn-primary btn-block" type="submit" value="Login">Login</button>
				</div>
			</div>
		</form>
		</div>
	</div>
	</div>
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.js"></script>
</body>
</html>