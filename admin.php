<?php
	require("common.php");
	if(empty($_SESSION['user'])){
		header("Location: login.php");
		die("Redirecting to login.php");
	}
?>
<html lang="en">
	<head>
		<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
		<meta name="description" content="Prefects Cup">
		<meta name="author" content="Matthew Wang">
		<title>Admin Panel | Prefects Cup</title>
		<link rel="icon" type="image/png" sizes="192x192"  href="img/android-icon-192x192.png">
		<link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="96x96" href="img/favicon-96x96.png">
		<link rel="icon" type="image/png" sizes="16x16" href="img/favicon-16x16.png">
		<link href="css/bootstrap.min.css" rel="stylesheet" />
		<link href="css/base.css" rel="stylesheet" />
		<link href="css/font-awesome.min.css" rel="stylesheet" />
	</head>
  <body>
		<a class="float-right" href="index.html">To Home</a>
		<div class="section-one" id="points">
			<div class="container">
				<canvas class="img-fluid" id="graph"></canvas>
				<button type="button" class="btn btn-outline-primary btn-lg" data-toggle="modal" data-target="#setPointsModal">
					Set Points
				</button>
			</div>
		</div>
		<footer class="text-center">
      <div class="container">
        <p><span class="text-muted">Made by Matthew Wang with <span class="fa fa-heart" style="color:red;"></span> and <a href="http://github.com/malsf21/prefects-cup-website"><span class="fa fa-github" style="color:purple;"></span></a></span></p>
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
						<form class="form-signin" action="update_standings.php" method="post">
							<h4>Set Points</h4>
							<p>
							Input values to <b>set</b> the points for each house. If you to add a new set of points, please use the add set button instead.
							</p>
							<div class="row">
								<div class="col-sm-6">
									<h4>Bremner's</h4>
									<input type="text" id="bremner" name="bremner" class="form-control" required="" value="" autofocus="">
								</div>
								<div class="col-sm-6">
									<h4>Howard's</h4>
									<input type="text" id="howard" name="howard" class="form-control" required="" value="">
								</div>
							</div>
							<div class="row">
								<div class="col-sm-6">
									<h4>Jackson's</h4>
									<input type="text" id="jackson" name="jackson" class="form-control" required="" value="">
								</div>
								<div class="col-sm-6">
									<h4>Martland's</h4>
									<input type="text" id="martland" name="martland" class="form-control" required="" value="">
								</div>
							</div>
							<div class="row">
								<div class="col-sm-6">
									<h4>McHugh's</h4>
									<input type="text" id="mchugh" name="mchugh" class="form-control" required="" value="">
								</div>
								<div class="col-sm-6">
									<h4>Mowbray's</h4>
									<input type="text" id="mowbray" name="mowbray" class="form-control" required="" value="">
								</div>
							</div>
							<div class="row">
								<div class="col-sm-6">
									<h4>Orr's</h4>
									<input type="text" id="orr" name="orr" class="form-control" required="" value="">
								</div>
								<div class="col-sm-6">
									<h4>Scadding's</h4>
									<input type="text" id="scadding" name="scadding" class="form-control" required="" value="">
								</div>
							</div>
							<div class="row">
								<div class="col-sm-6">
									<h4>Seaton's</h4>
									<input type="text" id="seaton" name="seaton" class="form-control" required="" value="">
								</div>
								<div class="col-sm-6">
									<h4>Wedd's</h4>
									<input type="text" id="wedd" name="wedd" class="form-control" required="" value="">
								</div>
							</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-outline-danger" data-dismiss="modal">Cancel</button>
						<button type="submit" class="btn btn-outline-success">Save changes</button>
					</form>
					</div>
				</div>
			</div>
		</div>
		<!--
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
									<input type="text" id="bremner" name="bremner" class="form-control" required="" value="" autofocus="">
								</div>
								<div class="col-sm-6">
									<h4>Howard's</h4>
									<input type="text" id="howard" name="howard" class="form-control" required="" value="">
								</div>
							</div>
							<div class="row">
								<div class="col-sm-6">
									<h4>Jackson's</h4>
									<input type="text" id="jackson" name="jackson" class="form-control" required="" value="">
								</div>
								<div class="col-sm-6">
									<h4>Martland's</h4>
									<input type="text" id="martland" name="martland" class="form-control" required="" value="">
								</div>
							</div>
							<div class="row">
								<div class="col-sm-6">
									<h4>McHugh's</h4>
									<input type="text" id="mchugh" name="mchugh" class="form-control" required="" value="">
								</div>
								<div class="col-sm-6">
									<h4>Mowbray's</h4>
									<input type="text" id="mowbray" name="mowbray" class="form-control" required="" value="">
								</div>
							</div>
							<div class="row">
								<div class="col-sm-6">
									<h4>Orr's</h4>
									<input type="text" id="orr" name="orr" class="form-control" required="" value="">
								</div>
								<div class="col-sm-6">
									<h4>Scadding's</h4>
									<input type="text" id="scadding" name="scadding" class="form-control" required="" value="">
								</div>
							</div>
							<div class="row">
								<div class="col-sm-6">
									<h4>Seaton's</h4>
									<input type="text" id="seaton" name="seaton" class="form-control" required="" value="">
								</div>
								<div class="col-sm-6">
									<h4>Wedd's</h4>
									<input type="text" id="wedd" name="wedd" class="form-control" required="" value="">
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
		-->
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/google_analytics.js"></script>
		<script src="js/chart.min.js"></script>
		<script>var adminPage = true;</script>
		<script src="js/graph-points.js"></script>
  </body>
</html>
