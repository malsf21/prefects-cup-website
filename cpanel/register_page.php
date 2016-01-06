<!DOCTYPE html>
<html lang="en">
	
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<meta name="description" content="Prefects Cup">
		<meta name="author" content="">
		<title>Register | Prefects Cup</title>
		<link rel="icon" href="./css/favicon.ico" />
		<link href="./css/bootstrap.css" rel="stylesheet" />
		<link href="./css/base.css" rel="stylesheet"  />
	</head>
<body>
	<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand page-scroll" href="#page-top">Prefects Cup Control Panel</a>
			</div>

			<div class="collapse navbar-collapse navbar-ex1-collapse">
				<ul class="nav navbar-nav">
					<li><a href="index.php">Back to Home</a></li>
					<li><a href="register_page.php">Register</a></li>
					<li><a href="login_page.php">Login</a></li>
				</ul>
			</div>
		</div>
	</nav> 
	<div class="section-one">
	<div class="container">
		<h1>Account Registration</h1>
		<h3>Before you can have an account, you need to contact Matthew Wang at <a href="mailto:matthew.wang@ucc.on.ca">matthew.wang@ucc.on.ca</a></h3>
		<form class="form-signin" action="register_function.php" method="post">
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
			<div class = "row">
				<div class = "col-md-12">
					<input type="password" id="password2" name="password2" class="form-control" placeholder="Confirm Password" required="">
				</div>
			</div>
			</br>
			<div class = "row">
				<div class = "col-md-12">
					<button class="btn btn-lg btn-primary btn-block" type="submit" value="Login">Register</button>
				</div>
			</div>
		</form>
		</div>
	</div>
	</div>
	<script src="./js/jquery.js"></script>
	<script src="./js/bootstrap.js"></script>
</body>
</html>