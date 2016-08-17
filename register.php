<?php
	require("common.php");
	if(!empty($_SESSION['user'])){
		header("Location: admin.php");
		die("Redirecting to admin.php");
	}
?>
<?php
	function register(){
		$allowed = false;
		if ($allowed == true){
			if (isset($_GET['register'])) {
				require("common.php");

				if(!empty($_POST)) {
					if( empty($_POST['email'])   ||
						empty($_POST['name'])  		 ||
						empty($_POST['password'])  ||
						empty($_POST['password2']) ||
						empty($_POST['secretpassword'])
						) {
						die("You missed a field");
					}

					if($_POST['password'] != $_POST['password2']) {
						die("Password Mismatch");
					}

					if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
						die("Invalid Email Address");
					}

					$query = "
						SELECT
							1
						FROM users
						WHERE
							email = :email
					";

					$query_params = array(
						':email' => $_POST['email']
					);

					try {
						$stmt = $db->prepare($query);
						$result = $stmt->execute($query_params);
					}
					catch(PDOException $ex) {
						die("Failed to run query: " . $ex->getMessage());
					}

					$row = $stmt->fetch();

					if($row) {
						die("This email address is already registered");
					}

					$query = "
						INSERT INTO users (
							password,
							salt,
							email,
							name
						) VALUES (
							:password,
							:salt,
							:email,
							:name
						);
					";

					$salt = dechex(mt_rand(0, 2147483647)) . dechex(mt_rand(0, 2147483647));

					$password = hash('sha256', $_POST['password'] . $salt);

					for($round = 0; $round < 65536; $round++) {
						$password = hash('sha256', $password . $salt);
					}

					$query_params = array(
						':password' => $password,
						':salt' => $salt,
						':email' => $_POST['email'],
						':name' => $_POST['name']
					);

					try {
						$stmt = $db->prepare($query);
						$result = $stmt->execute($query_params);
						header("Location: login.php");
					}
					catch(PDOException $ex) {
						die("Failed to run query: " . $ex->getMessage());
					}
				}
			}
		}
	}
	register();
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
		<meta name="description" content="Prefects Cup">
		<meta name="author" content="">
		<title>Register | Prefects Cup</title>
		<link rel="icon" href="css/favicon.ico" />
		<link href="css/bootstrap.min.css" rel="stylesheet" />
		<link href="css/base.css" rel="stylesheet" />
		<link href="css/font-awesome.min.css" rel="stylesheet" />
		<style>
			.row{
				padding-top: 20px;
			}
		</style>
	</head>
<body>
		<div class="container">
			<h1 class="display-4">Account Registration</h1>
			<h3>In order to get the secret password, you need to contact Matthew Wang at <a href="mailto:matthew.wang@ucc.on.ca">matthew.wang@ucc.on.ca</a></h3>
			<form class="form-signin" action="?register" method="post">
				<div class = "row">
					<div class = "col-md-6">
						<h3>Email</h3>
						<input type="email" id="email" class="form-control" placeholder="john.smith@ucc.on.ca" name="email" required="" autofocus="">
					</div>
					<div class = "col-md-6">
						<h3>Name</h3>
						<input type="text" id="name" class="form-control" placeholder="John Smith" name="name" required="">
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<h3>Password</h3>
						<input type="password" id="password" name="password" class="form-control" placeholder="Password" required="">
					</div>
					<div class="col-md-6">
						<h3>Confirm Password</h3>
						<input type="password" id="password2" name="password2" class="form-control" placeholder="Confirm Password" required="">
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<h3>Secret Password</h3>
						<input type="password" id="secretpassword" name="secretpassword" class="form-control" placeholder="Secret Password" required="">
					</div>
				</div>
				</br>
				<div class="row">
					<div class="col-md-12">
						<button class="btn btn-lg btn-primary btn-block" type="submit" value="Login">Register</button>
					</div>
				</div>
			</form>
		</div>
		<footer class="footer">
      <div class="container">
        <span class="text-muted">Made by Matthew Wang with <span class="fa fa-heart" style="color:red;"></span> and <a href="http://github.com/malsf21/prefects-cup-website"><span class="fa fa-github" style="color:purple;"></span></a></span>
      </div>
    </footer>
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/google_analytics.js"></script>
	</body>
</html>
