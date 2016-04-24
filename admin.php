<?php
	require("common.php");
	if(empty($_SESSION['user'])){
		header("Location: login.php");
		die("Redirecting to login.php");
	}
?>
<?php
	$pointsfile = fopen("api/points_data.json", "r");
	$points_data = json_decode(fread($pointsfile,filesize("api/points_data.json")),true);
	fclose($pointsfile);
	if (isset($_GET['setPoints'])){
		if(!empty($_POST)){
			$current_time = time();
			$new_data = $points_data;
			$new_data["data"]["timestamp"] = $current_time;
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
			$pointsfile = fopen("api/points_data.json", "w");
			fwrite($pointsfile, json_encode($new_data));
			fclose($pointsfile);
			header("Location: admin.php");
			die("Redirecting to: admin.php");
		}
	}
	if (isset($_GET['setPoints'])){
		if(!empty($_POST)){
			$scheduleJSON = [
				"timestamp" => time(),
				"data" => $_POST["data"]
			];
			$schedulesfile = fopen("api/schedule_data.json");
			fwrite($schedulesfile, $scheduleJSON);
			fclose($schedulesfile);
			header("Location: admin.php");
			die("Redirecting to: admin.php");
		}
	}
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
		<style>
		.card{
			padding: 5px;
		}
		</style>
	</head>
  <body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
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
						<a class="btn btn-info-outline pull-xs-right" href="index.html">To Home</a>
				  </ul>
			</div>
		</nav>
		<div class="section-two" id="points">
			<div class="container">
				<div id="graph" class="img-responsive"></div>
				<div class="row">
					<div class="col-xs-6" style="text-align:right;">
						<button type="button" class="btn btn-secondary-outline btn-lg" data-toggle="modal" data-target="#setPointsModal">
			        Set Points
			      </button>
					</div>
					<div class="col-xs-6" style="text-align:left;">
			      <button type="button" class="btn btn-secondary-outline btn-lg" data-toggle="modal" data-target="#addPointsModal">
			        Add Points
			      </button>
					</div>
			</div>
			</div>
		</div>
		<div class="section-one" id="schedule">
			<div class="container">
				<h1>Schedule</h1>
				<div id="schedule"></div>
				<button type="button" class="btn btn-primary-outline btn-lg" data-toggle="modal" data-target="#editScheduleModal">
					Edit Schedule
				</button>
			</div>
		</div>
		<footer class="footer">
      <div class="container">
        <span class="text-muted">Made by Matthew Wang with <span class="fa fa-heart" style="color:red;"></span> and <a href="http://github.com/malsf21/prefects-cup-website"><span class="fa fa-github" style="color:purple;"></span></a></span>
      </div>
    </footer>
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
								<div class="col-sm-6">
									<h4>Bremner's</h4>
									<input type="text" id="bremner" name="bremner" class="form-control" required="" value="<?php echo $points_data["data"]["points"]['bremner']; ?>" autofocus="">
								</div>
								<div class="col-sm-6">
									<h4>Howard's</h4>
									<input type="text" id="howard" name="howard" class="form-control" required="" value="<?php echo $points_data["data"]["points"]['howard']; ?>">
								</div>
							</div>
							<div class="row">
								<div class="col-sm-6">
									<h4>Jackson's</h4>
									<input type="text" id="jackson" name="jackson" class="form-control" required="" value="<?php echo $points_data["data"]["points"]['jackson']; ?>">
								</div>
								<div class="col-sm-6">
									<h4>Martland's</h4>
									<input type="text" id="martland" name="martland" class="form-control" required="" value="<?php echo $points_data["data"]["points"]['martland']; ?>">
								</div>
							</div>
							<div class="row">
								<div class="col-sm-6">
									<h4>McHugh's</h4>
									<input type="text" id="mchugh" name="mchugh" class="form-control" required="" value="<?php echo $points_data["data"]["points"]['mchugh']; ?>">
								</div>
								<div class="col-sm-6">
									<h4>Mowbray's</h4>
									<input type="text" id="mowbray" name="mowbray" class="form-control" required="" value="<?php echo $points_data["data"]["points"]['mowbray']; ?>">
								</div>
							</div>
							<div class="row">
								<div class="col-sm-6">
									<h4>Orr's</h4>
									<input type="text" id="orr" name="orr" class="form-control" required="" value="<?php echo $points_data["data"]["points"]['orr']; ?>">
								</div>
								<div class="col-sm-6">
									<h4>Scadding's</h4>
									<input type="text" id="scadding" name="scadding" class="form-control" required="" value="<?php echo $points_data["data"]["points"]['scadding']; ?>">
								</div>
							</div>
							<div class="row">
								<div class="col-sm-6">
									<h4>Seaton's</h4>
									<input type="text" id="seaton" name="seaton" class="form-control" required="" value="<?php echo $points_data["data"]["points"]['seaton']; ?>">
								</div>
								<div class="col-sm-6">
									<h4>Wedd's</h4>
									<input type="text" id="wedd" name="wedd" class="form-control" required="" value="<?php echo $points_data["data"]["points"]['wedd']; ?>">
								</div>
							</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-danger-outline" data-dismiss="modal">Cancel</button>
						<button type="submit" class="btn btn-success-outline">Save changes</button>
					</form>
					</div>
				</div>
			</div>
		</div>

		<div class="modal fade" id="addPointsModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
						<h4 class="modal-title" id="addPointsModalLabel">Set some points!</h4>
					</div>
					<div class="modal-body">
						<form class="form-signin" action="?setPoints" method="post">
							<h4>Add Points</h4>
							<p>
							Input values to <b>add to the current set</b> of points for each house. If you want to set the new points, please use the add set button instead.
							</p>
							<div class="row">
								<div class="col-sm-6">
									<h4>Bremner's</h4>
									<input type="text" id="bremner" name="bremner" class="form-control" required="" value="<?php echo $points_data["data"]["points"]['bremner']; ?>" autofocus="">
								</div>
								<div class="col-sm-6">
									<h4>Howard's</h4>
									<input type="text" id="howard" name="howard" class="form-control" required="" value="<?php echo $points_data["data"]["points"]['howard']; ?>">
								</div>
							</div>
							<div class="row">
								<div class="col-sm-6">
									<h4>Jackson's</h4>
									<input type="text" id="jackson" name="jackson" class="form-control" required="" value="<?php echo $points_data["data"]["points"]['jackson']; ?>">
								</div>
								<div class="col-sm-6">
									<h4>Martland's</h4>
									<input type="text" id="martland" name="martland" class="form-control" required="" value="<?php echo $points_data["data"]["points"]['martland']; ?>">
								</div>
							</div>
							<div class="row">
								<div class="col-sm-6">
									<h4>McHugh's</h4>
									<input type="text" id="mchugh" name="mchugh" class="form-control" required="" value="<?php echo $points_data["data"]["points"]['mchugh']; ?>">
								</div>
								<div class="col-sm-6">
									<h4>Mowbray's</h4>
									<input type="text" id="mowbray" name="mowbray" class="form-control" required="" value="<?php echo $points_data["data"]["points"]['mowbray']; ?>">
								</div>
							</div>
							<div class="row">
								<div class="col-sm-6">
									<h4>Orr's</h4>
									<input type="text" id="orr" name="orr" class="form-control" required="" value="<?php echo $points_data["data"]["points"]['orr']; ?>">
								</div>
								<div class="col-sm-6">
									<h4>Scadding's</h4>
									<input type="text" id="scadding" name="scadding" class="form-control" required="" value="<?php echo $points_data["data"]["points"]['scadding']; ?>">
								</div>
							</div>
							<div class="row">
								<div class="col-sm-6">
									<h4>Seaton's</h4>
									<input type="text" id="seaton" name="seaton" class="form-control" required="" value="<?php echo $points_data["data"]["points"]['seaton']; ?>">
								</div>
								<div class="col-sm-6">
									<h4>Wedd's</h4>
									<input type="text" id="wedd" name="wedd" class="form-control" required="" value="<?php echo $points_data["data"]["points"]['wedd']; ?>">
								</div>
							</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-danger-outline" data-dismiss="modal">Cancel</button>
						<button type="submit" class="btn btn-success-outline">Save changes</button>
					</form>
					</div>
				</div>
			</div>
		</div>
		<div class="modal fade" tabindex="-1" role="dialog" id="editScheduleModal">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h2 class="modal-title">Edit Schedules</h2>
          </div>
          <div class="modal-body">
            <h3>Hey there!</h3>
            <p>If you want to edit the schedules that show up, you can edit them here.</p>
              <div class="card">
                <div class="row">
                  <div class="col-sm-4">
                    <input type="text" id="new-schedule-name" name="new-schedule-name" class="form-control" required="" placeholder="House Event">
                  </div>
                  <div class="col-sm-5">
                    <input type="text" id="new-schedule-link" name="new-schedule-link" class="form-control" required="" placeholder="yourlink.com">
                  </div>
                  <div class="col-sm-2" style="color:white;text-align:center;">
                    <button class="btn btn-success btn-lg" onclick="addScheduleData($('#new-schedule-name').val(),$('#new-schedule-link').val(),true);"><span class="fa fa-plus"></span></button>
                  </div>
                </div>
              </div>
            <div id="new-schedule-list">
            </div>
          </div>
          <div class="modal-footer">
            <form method="post" onsubmit="submitSchedule()">
              <button type="button" class="btn btn-danger-outline" data-dismiss="modal" onclick="revertScheduleData()">Close</button>
              <button type="submit" class="btn btn-success-outline">Save changes</button>
            </form>
          </div>
        </div>
      </div>
    </div>
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/google_analytics.js"></script>
		<script src="js/jquery.easing.min.js"></script>
		<script src="js/scrolling-nav.js"></script>
		<script src="js/plotly.min.js"></script>
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
		<script src="js/editScheduleModal.js"></script>
  </body>
</html>
