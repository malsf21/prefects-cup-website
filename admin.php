<?php
	require("common.php");
	if(empty($_SESSION['user'])){
		header("Location: login.php");
		die("Redirecting to login.php");
	}
?>
<?php
	$pcfile = fopen("api/pc_data.json", "r");
	$pc_data = json_decode(fread($pcfile,filesize("api/pc_data.json")),true);
	fclose($pcfile);
 	//$pc_data = json_decode(file_get_contents("api/pc_data.json"), true);
	function setPoints(){
		if (isset($_GET['setPoints'])){
			if(!empty($_POST)){
				$current_time = time();
				$new_data = $pc_data;
				$new_data["time"] = $current_time;
				$new_data["data"]["points"] =
				[
					"bremner" => $_POST["bremner"],
		      "howard" => $_POST["howard"],
		      "jackson" => $_POST["jackson"],
		      "martland" => $_POST["martland"],
		      "mchugh" => $_POST["mchugh"],
		      "mowbray" => $_POST["mowbray"],
		      "orr" => $_POST["orr"],
		      "scadding" =>  $_POST["scadding"],
		      "seaton" =>  $_POST["seaton"],
		      "wedd" =>  $_POST["wedd"],
				];
				$pcfile = fopen("api/pc_data.json", "w");
				fwrite($pcfile, json_encode($new_data));
				fclose($pcfile);
				header("Location: admin.php");
				die("Redirecting to: admin.php");
				//file_put_contents('api/pc_data.json', json_encode($new_data));
			}
		}
	}
	setPoints();
?>
<html lang="en">
	<head>
		<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
		<meta name="description" content="Prefects Cup">
		<meta name="author" content="">
		<title>Admin Panel | Prefects Cup</title>
		<link rel="icon" href="css/favicon.ico" />
		<link href="css/bootstrap.min.css" rel="stylesheet" />
		<link href="css/base.css" rel="stylesheet" />
		<link href="css/font-awesome.min.css" rel="stylesheet" />
	</head>
  <body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
		<div class="modal fade" id="setPointsModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
						<h4 class="modal-title" id="setPointsModalLabel">Set some points!</h4>
					</div>
					<div class="modal-body">
						<form class="form-signin" action="?setPoints" method="post">
							<h4>Set Points</h4>
							<p>
							Input values to <b>set</b> the points for each house. If you to add a new set of points, please use the add set button instead.
							</p>
							<div class="row">
								<div class="col-md-6">
									<h4>Bremner's</h4>
									<input type="text" id="bremner" name="bremner" class="form-control" required="" value="<?php echo $pc_data["data"]["points"]['bremner']; ?>" autofocus="">
								</div>
								<div class="col-md-6">
									<h4>Howard's</h4>
									<input type="text" id="howard" name="howard" class="form-control" required="" value="<?php echo $pc_data["data"]["points"]['howard']; ?>">
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<h4>Jackson's</h4>
									<input type="text" id="jackson" name="jackson" class="form-control" required="" value="<?php echo $pc_data["data"]["points"]['jackson']; ?>">
								</div>
								<div class="col-md-6">
									<h4>Martland's</h4>
									<input type="text" id="martland" name="martland" class="form-control" required="" value="<?php echo $pc_data["data"]["points"]['martland']; ?>">
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<h4>McHugh's</h4>
									<input type="text" id="mchugh" name="mchugh" class="form-control" required="" value="<?php echo $pc_data["data"]["points"]['mchugh']; ?>">
								</div>
								<div class="col-md-6">
									<h4>Mowbray's</h4>
									<input type="text" id="mowbray" name="mowbray" class="form-control" required="" value="<?php echo $pc_data["data"]["points"]['mowbray']; ?>">
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<h4>Orr's</h4>
									<input type="text" id="orr" name="orr" class="form-control" required="" value="<?php echo $pc_data["data"]["points"]['orr']; ?>">
								</div>
								<div class="col-md-6">
									<h4>Scadding's</h4>
									<input type="text" id="scadding" name="scadding" class="form-control" required="" value="<?php echo $pc_data["data"]["points"]['scadding']; ?>">
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<h4>Seaton's</h4>
									<input type="text" id="seaton" name="seaton" class="form-control" required="" value="<?php echo $pc_data["data"]["points"]['seaton']; ?>">
								</div>
								<div class="col-md-6">
									<h4>Wedd's</h4>
									<input type="text" id="wedd" name="wedd" class="form-control" required="" value="<?php echo $pc_data["data"]["points"]['wedd']; ?>">
								</div>
							</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
						<button type="submit" class="btn btn-primary">Save changes</button>
					</form>
					</div>
				</div>
			</div>
		</div>

		<nav class="navbar navbar-light bg-faded navbar-fixed-top" role="navigation">
			<div class="container">
				<button class="hamburger hamburger--spring navbar-toggler hidden-sm-up pull-xs-right" type="button" data-toggle="collapse" data-target="#collapse-navbar">
				  <span class="hamburger-box">
				    <span class="hamburger-inner"></span>
				  </span>
				</button>
				  <a class="navbar-brand">Admin Panel</a>
				  <ul class="nav navbar-nav collapse navbar-toggleable-xs" id="collapse-navbar">
				    <li class="nav-item">
				      <a class="nav-link page-scroll" href="#points">Edit Points</a>
				    </li>
				    <li class="nav-item">
				      <a class="nav-link page-scroll" href="#events">Edit Events</a>
				    </li>
				    <li class="nav-item">
				      <a class="nav-link page-scroll" href="#schedule">Edit Schedule</a>
				    </li>
						<li class="nav-item">
				      <a class="nav-link page-scroll" href="#standings">Standings</a>
				    </li>
						<li class="nav-item">
				      <a class="nav-link page-scroll" href="#contact">Contact</a>
				    </li>
						<button class="btn btn-success-outline pull-xs-right">Manage</button>
				  </ul>
			</div>
		</nav>
		<div class="section-two" id="points">
			<div class="container">
				<h1>Prefects Cup Points</h1>
				<div id="graph" class="img-responsive"></div>
				<div class="row">
					<div class="col-xs-6" style="text-align:right;">
						<button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target="#setPointsModal">
			        Set Points
			      </button>
					</div>
					<div class="col-xs-6" style="text-align:left;">
			      <button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target="#setPointsModal">
			        Add Points
			      </button>
					</div>
			</div>
			</div>
		</div>
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/google_analytics.js"></script>
		<script src="js/jquery.easing.min.js"></script>
		<script src="js/scrolling-nav.js"></script>
		<script>
			function httpGet(theUrl){
				var xmlHttp = new XMLHttpRequest();
				xmlHttp.open( "GET", theUrl, false ); // false for synchronous request
				xmlHttp.send( null );
				return xmlHttp.responseText;
			}
			//setting up the hamburger
			var $hamburger = $(".hamburger");
			$hamburger.on("click", function(e) {
				$hamburger.toggleClass("is-active");
			});
		</script>
		<script src="js/graph-points.js"></script>
  </body>
</html>
