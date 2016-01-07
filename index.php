<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<meta name="description" content="Prefects Cup">
		<meta name="author" content="">
		<title>Prefects Cup</title>
		<link rel="icon" href="css/favicon.ico" />
		<link href="css/bootstrap.css" rel="stylesheet" />
		<link href="css/morris.css" rel="stylesheet" />
		<link href="css/base.css" rel="stylesheet"  />
		<script src="js/countdown.js"></script>
		<script type="text/javascript">
			var deadLine = "6/1/2016"; //Countdown date in MM/DD/YYYY format (no 0's required)
			window.setInterval(function(){
				$("#timeLeft").html(getTimeRemaining(deadLine));
			}, 1000);
		</script>
	</head>

	<?php include_once("import_standings.php") ?>

	<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
		<!-- NAVBAR -->
		<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
			<div class="container">
				<div class="navbar-header page-scroll">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-index">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand page-scroll" href="#page-top">Prefects Cup</a>
				</div>


				<div class="collapse navbar-collapse navbar-index">
					<ul class="nav navbar-nav">
						<li class="hidden"><a href="#page-top"></a></li>
						<li><a class="page-scroll" href="#information">Info</a></li>
						<li><a class="page-scroll" href="#events">Events</a></li>
						<li><a class="page-scroll" href="#schedule">Schedule</a></li>
						<li><a class="page-scroll" href="#standings">Standings</a></li>
						<li><a class="page-scroll" href="#contact">Contact</a></li>	
					</ul>
				</div>
			</div>
		</nav>

		<!-- FOOTER -->
		<nav class="navbar navbar-default navbar-fixed-bottom navbar-footer hidden-xs top-nav-collapse">
			<div class="container-fluid navbar-footer">
				<div class="navbar-header">
					
				</div>
				<div class="collapse navbar-collapse" id="footer-navbar">
					<ul class="nav navbar-nav">
						<p class="navbar-text">Developed by <a href="http://twitter.com/malsf21"><b>Matthew Wang</b></a>, with the help of <a href="http://jack.antinode.ca"><b>Jack Sarick</b></a>.
						</p>
					</ul>
					<ul class="nav navbar-nav navbar-right">
						<p class="navbar-text" style="font-size:8px">
						This website utilises <a href="http://getbootstrap.com">the bootstrap framework</a>.
						</br>
						Source code is available <a href="https://github.com/malsf21/prefects-cup-website">here</a>.
						</p>
					</ul>
				</div>
			</div>
		</nav>

		<!-- BODY CONTENT -->

		<section id="start" class="section-two">
			<div class="center-parent">
				<span class="center-child">
				<h3>The</h3>
				<h1>Prefects Cup</h1>
				<h2>2016</h2>
				<a class="page-scroll btn btn-default btn-lg" href="#information" style="color:white;background-color:#337ab7;border:0px;"><span class="glyphicon glyphicon-chevron-down" aria-hidden="true"></span></a>
				</span>
			</div>
		</section>
		<section id="information" class="section-one">
			<div class="center-parent">
				<span class="center-child">
					<h2>This year's contenders are: 
					<span style="color:red; font-weight: bold;">Bremner's, </span>
					<span style="color:orange; font-weight: bold;">Howard's, </span>
					<span style="color:yellow; font-weight: bold;">Jackson's, </span>
					<span style="color:purple; font-weight: bold;">Martland's, </span>
					<span style="color:brown; font-weight: bold;">McHugh's, </span>
					<span style="color:gray; font-weight: bold;">Mowbray's, </span>
					<span style="color:blue; font-weight: bold;">Orr's, </span>
					<span style="color:teal; font-weight: bold;">Scadding's, </span>
					<span style="color:green; font-weight: bold;">Seaton's, </span>and
					<span style="color:black; font-weight: bold;">Wedd's.</span>
					</h2>
					<div style="border-top: solid #337ab7;">
						<h2>Time Until the Winner is Announced:</h2>
						<h1>
							<div id="timeLeft">000 Days, 00 Hours, 00 Minutes, and 00 Seconds!</div>
						</h1>
					</div>
					<a class="page-scroll btn btn-default btn-lg" href="#events" style="color:black;background-color:#FFF;border:0px;"><span class="glyphicon glyphicon-chevron-down" aria-hidden="true"></span></a>
				</span>
			</div>
		</section>

		<section id="events" class="section-two">
			<div class="container">
				<h6>Click on a picture to expand</h6>
				<h2>Ongoing Events</h2>
				<div class = "row">
					<div class = "col-md-6">
						<a href ="#collapse1" data-toggle="collapse">
						<img src = "img/hockey_player.jpg" class="img-rounded" height="128px"></img>
						</a>
						<h3>House Hockey</h3>
						<div class="collapse" id="collapse1">
							House Hockey features 9 teams fighting tooth and nail at the UCC arena to claim themselves the champion of Canada's national pastime. 
							</br>
							</br>
							The rules can be found <a href="files/house_hockey_2015.pdf" style="color:#FFF;font-weight: bold;">here</a>, while the schedule can be found <a href="https://docs.google.com/spreadsheets/u/2/d/1GzFvd7Y6hQpUnl_AjiJjQYygN6WydNMemBAoPJXPo4s/pubhtml" style="color:#FFF;font-weight: bold;">here</a>. 
						</div>
					</div>
					<div class = "col-md-6">
						<a href ="#collapse2" data-toggle="collapse">
						<img src = "img/placeholder.png" class="img-rounded" height="128px"></img>
						</a>
						<h3>House Basketball</h3>
						<div class="collapse" id="collapse2">
							Description of activity
						</div>
					</div>
				</div>
				</br>
				<h2>Upcoming Events</h2>
				<div class = "row">
					<div class = "col-md-6">
						<a href ="#collapse3" data-toggle="collapse">
						<img src = "img/placeholder.png" class="img-rounded" height="128px"></img>
						</a>
						<h3>Activity Three</h3>
						<div class="collapse" id="collapse3">
							Description of activity
						</div>
					</div>
					<div class = "col-md-6">
						<a href ="#collapse4" data-toggle="collapse">
						<img src = "img/placeholder.png" class="img-rounded" height="128px"></img>
						</a>
						<h3>Activity Four</h3>
						<div class="collapse" id="collapse4">
							Description of activity
						</div>
					</div>
				</div>	
			</div>
		</section>

		<section id="schedule" class ="section-one">
			<div class="container">
				<h1>Schedule</h1>
			</div>
		</section>

		<section id="standings" class="section-two">
			<div class="container">
				<h1>Prefects Cup Points Standings</h1>
				<h3>These are updated periodically; they won't always be accurate to today's date.</h3>
				<div id="houseStandings" style="height:100%;"></div>
			</div>
		</section>

		<section id="contact" class="section-one">
			<div class="container">
				<h2>Thanks For Supporting Your House!</h2>
				<h1>Need to contact us?</h1>
				<div class="row">
					<div class="col-md-4" style="text-align:right;">
						<h3>Web Designer: </h3>
					</div>
					<div class="col-md-4">
						<h3>Matthew Wang</h3>
					</div>
					<div class="col-md-4">
						<h3><a href="mailto:matthew.wang@ucc.on.ca" style="font-weight: bold;">matthew.wang@ucc.on.ca</a></h3>
					</div>
				</div>

				<div class="row">
					<div class="col-md-4" style="text-align:right;">
						<h3>Head Organiser: </h3>
					</div>
					<div class="col-md-4">
						<h3>Evan Williams</h3>
					</div>
					<div class="col-md-4">
						<h3><a href="evan.williams@ucc.on.ca" style="font-weight: bold;">evan.williams@ucc.on.ca</a></h3>
					</div>
				</div>

				<div class="row">
					<div class="col-md-4" style="text-align:right;">
						<h3>House Soccer Organiser: </h3>
					</div>
					<div class="col-md-4">
						<h3>Felipe Nilo</h3>
					</div>
					<div class="col-md-4">
						<h3><a href="fnilo@ucc.on.ca" style="font-weight: bold;">fnilo@ucc.on.ca</a></h3>
					</div>
				</div>

				<div class="row">
					<div class="col-md-4" style="text-align:right;">
						<h3>House Soccer Organiser: </h3>
					</div>
					<div class="col-md-4">
						<h3>Reem Aweida-Parsons</h3>
					</div>
					<div class="col-md-4">
						<h3><a href="raweida-parsons@ucc.on.ca" style="font-weight: bold;">raweida-parsons@ucc.on.ca</a></h3>
					</div>
				</div>

				<div class="row">
					<div class="col-md-4" style="text-align:right;">
						<h3>Junior House Soccer Organiser: </h3>
					</div>
					<div class="col-md-4">
						<h3>Kevin Olds</h3>
					</div>
					<div class="col-md-4">
						<h3><a href="kolds@ucc.on.ca" style="font-weight: bold;">kolds@ucc.on.ca</a></h3>
					</div>
				</div>

				<div class="row">
					<div class="col-md-4" style="text-align:right;">
						<h3>House Basketball Organiser: </h3>
					</div>
					<div class="col-md-4">
						<h3>Mario Sturino</h3>
					</div>
					<div class="col-md-4">
						<h3><a href="msturino@ucc.on.ca" style="font-weight: bold;">msturino@ucc.on.ca</a></h3>
					</div>
				</div>

				<div class="row">
					<div class="col-md-4" style="text-align:right;">
						<h3>House Volleyball Organiser: </h3>
					</div>
					<div class="col-md-4">
						<h3>Mario Sturino</h3>
					</div>
					<div class="col-md-4">
						<h3><a href="msturino@ucc.on.ca" style="font-weight: bold;">msturino@ucc.on.ca</a></h3>
					</div>
				</div>

				<div class="row">
					<div class="col-md-4" style="text-align:right;">
						<h3>House Hockey Organiser: </h3>
					</div>
					<div class="col-md-4">
						<h3>Ian Toope</h3>
					</div>
					<div class="col-md-4">
						<h3><a href="itoope@ucc.on.ca" style="font-weight: bold;">itoope@ucc.on.ca</a></h3>
					</div>
				</div>

				<div class="row">
					<div class="col-md-4" style="text-align:right;">
						<h3>House Softball Organiser: </h3>
					</div>
					<div class="col-md-4">
						<h3>Richard Turner</h3>
					</div>
					<div class="col-md-4">
						<h3><a href="rturner@ucc.on.ca" style="font-weight: bold;">rturner@ucc.on.ca</a></h3>
					</div>
				</div>
				

			</div>
		</section>
		<section id="end" class="section-one">
			<div class="container">
			</div>
		</section>
		<!-- JAVASCRIPT; loaded last to load page quicker -->
		<script src="js/jquery.js"></script>
		<script src="js/bootstrap.js"></script>
		<script src="js/jquery.easing.min.js"></script>
		<script src="js/scrolling-nav.js"></script>
		<script src="js/raphael-min.js"></script>
		<script src="js/morris.min.js"></script>
		<script type="text/javascript">

			//This part is just importing the variables from the previous database import of the standings values.
			var bremner = "<?= $info['bremner'] ?>";
			var howard = "<?= $info['howard'] ?>";
			var jackson = "<?= $info['jackson'] ?>";
			var martland = "<?= $info['martland'] ?>";
			var mchugh = "<?= $info['mchugh'] ?>";
			var mowbray = "<?= $info['mowbray'] ?>";
			var orr = "<?= $info['orr'] ?>";
			var scadding = "<?= $info['scadding'] ?>";
			var seaton = "<?= $info['seaton'] ?>";
			var wedd = "<?= $info['wedd'] ?>";

			//implements the bar graph
			Morris.Bar({
				element: 'houseStandings',
				data: [
					{ date: '2016', 
						bremners: bremner, 
						howards: howard, 
						jacksons: jackson, 
						martlands: martland, 
						mchughs: mchugh, 
						mowbrays: mowbray, 
						orrs: orr, 
						scaddings: scadding, 
						seatons: seaton, 
						wedds: wedd,
					}
				],
				xkey: 'date',
				ykeys: ['bremners', 'howards', 'jacksons', 'martlands', 'mchughs', 'mowbrays', 'orrs', 'scaddings', 'seatons', 'wedds'],
				labels: ['Bremner\'s', 'Howard\'s', 'Jackson\'s', 'Martland\'s', 'McHugh\'s', 'Mowbray\'s', 'Orr\'s', 'Scadding\'s', 'Seaton\'s', 'Wedd\'s'],
				barColors: ['red', 'orange', "yellow", 'purple', 'brown', 'gray', 'blue', 'teal', 'green', 'black'],
				gridTextColor: 'white',
				hideHover: 'auto',
			});
		</script>

	</body>

</html>