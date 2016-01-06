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

	<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
		<!-- NAVBAR -->
		<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
			<div class="container">
				<div class="navbar-header page-scroll">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand page-scroll" href="#page-top">Prefects Cup</a>
				</div>


				<div class="collapse navbar-collapse navbar-ex1-collapse">
					<ul class="nav navbar-nav">
						<li class="hidden"><a href="#page-top"></a></li>
						<li><a class="page-scroll" href="#events">Events</a></li>
						<li><a class="page-scroll" href="#schedule">Schedule</a></li>
						<li><a class="page-scroll" href="#standings">Standings</a></li>
						<li><a class="page-scroll" href="#contact">Contact</a></li>	
					</ul>
				</div>
			</div>
		</nav>

		<section id="start" class="section-one">
			<div class="container">
				<h1>Prefects Cup</h1>
				<div class="well well-lg">
					<h4>
					The Prefects Cup is a competition between 10 houses at Upper Canada College. They compete throughout the year in various house events, including seasonal house sports, special athletic events such as House Track and Field, and house spirit events such as Movember.
					</br>
					</h4>
				</div>
				<h2>This year's contenders are: </h2>
				<div class="well well-lg">
					<h4>
					<span style="color:red; font-weight: bold;">Bremner's, </span>
					<span style="color:orange; font-weight: bold;">Howard's, </span>
					<span style="color:yellow; font-weight: bold;">Jackson's, </span>
					<span style="color:purple; font-weight: bold;">Martland's, </span>
					<span style="color:brown; font-weight: bold;">McHugh's, </span>
					<span style="color:gray; font-weight: bold;">Mowbray's, </span>
					<span style="color:white; font-weight: bold;">Orr's, </span>
					<span style="color:teal; font-weight: bold;">Scadding's, </span>
					<span style="color:green; font-weight: bold;">Seaton's, </span>and
					<span style="color:black; font-weight: bold;">Wedd's.</span>
					</h4>
				</div>
				<h2>Time Until the Winner is Announced:</h2>
				<div class="well well-lg">
					<h1>
						<div id="timeLeft">000 Days, 00 Hours, 00 Minutes, and 00 Seconds!</div>
					</h1>
				</div>
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
				<h3>These are updated erratically; they won't always be accurate to today's date.</h3>
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
				<!-- OLD FORMATTING
				<h3><b>Web Designer: </b>Matthew Wang, <a href="mailto:matthew.wang@ucc.on.ca" style="font-weight: bold;">matthew.wang@ucc.on.ca</a></br></h3>
				<h3><b>Head Organiser: </b>Evan Williams, <a href="evan.williams@ucc.on.ca" style="font-weight: bold;">evan.williams@ucc.on.ca</a></br></h3>
				<h3><b>House Soccer Organiser: </b>Felipe Nilo, <a href="fnilo@ucc.on.ca" style="font-weight: bold;">fnilo@ucc.on.ca</a></br></h3>
				<h3><b>House Soccer Organiser: </b>Reem Aweida-Parsons, <a href="raweida-parsons@ucc.on.ca" style="font-weight: bold;">raweida-parsons@ucc.on.ca</a></br></h3>
				<h3><b>Junior House Soccer Organiser: </b>Kevin Olds, <a href="kolds@ucc.on.ca" style="font-weight: bold;">kolds@ucc.on.ca</a></br></h3>
				<h3><b>House Basketball Organiser: </b>Mario Sturino, <a href="msturino@ucc.on.ca" style="font-weight: bold;">msturino@ucc.on.ca</a></br></h3>
				<h3><b>House Volleyball Organiser: </b>Mario Sturino, <a href="msturino@ucc.on.ca" style="font-weight: bold;">msturino@ucc.on.ca</a></br></h3>
				<h3><b>House Hockey Organiser: </b>Ian Toope, <a href="itoope@ucc.on.ca" style="font-weight: bold;">itoope@ucc.on.ca</a></br></h3>
				<h3><b>House Softball Organiser: </b>Richard Turner, <a href="rturner@ucc.on.ca" style="font-weight: bold;">rturner@ucc.on.ca</a></br></h3>
				-->

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
			var bremner = "<?= $bremner?>";
			var howard = "<?= $howard?>";
			var jackson = "<?= $jackson?>";
			var martland = "<?= $martland?>";
			var mchugh = "<?= $mchugh?>";
			var mowbray = "<?= $mowbray?>";
			var orr = "<?= $orr?>";
			var scadding = "<?= $scadding?>";
			var seaton = "<?= $seaton?>";
			var wedd = "<?= $wedd?>";

			//implements the bar graph
			Morris.Bar({
				element: 'houseStandings',
				data: [
					{ date: '2015-08-01', 
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
				hideHover: 'always',
			});
		</script>

	</body>

</html>