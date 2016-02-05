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
		<script src="js/google_analytics.js"></script>
		<script src="js/countdown.js"></script>
		<script type="text/javascript">
			var deadLine = "6/1/2016"; //Countdown date in MM/DD/YYYY format (no 0's required)
			window.setInterval(function(){
				$("#timeLeft").html(getTimeRemaining(deadLine));
			}, 1000);
		</script>
		<style>
			.collapse-text{
				color:white;
				text-decoration:none;
			}
			.table-index{
				text-align: center;
				font-weight: bold;
			}
		</style>
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
					<ul class="nav navbar-nav navbar-right">
						<li><a href="control.php">Control Panel</a></li>
					</ul>
				</div>

			</div>
		</nav>

		<!-- FOOTER -->
		<?php include_once("footer.php") ?>

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
				<h6>Click on an icon to expand</h6>
				<div class = "row">
					<div class = "col-md-6">
						<a href ="#collapse1" data-toggle="collapse">
							<img src = "img/hockey_player.png" class="img-rounded hidden-xs hidden-sm" height="128px"></img>
							<h3 class="collapse-text">House Hockey</h3>
						</a>
						<div class="collapse" id="collapse1">
							House Hockey features 9 teams fighting tooth and nail at the UCC arena to claim themselves the champion of Canada's national pastime.
							</br>
							</br>
							The rules can be found <a href="files/house_hockey_2015.pdf" style="color:#FFF;font-weight: bold;">here</a>, while the schedule can be found <a href="https://docs.google.com/spreadsheets/u/2/d/1GzFvd7Y6hQpUnl_AjiJjQYygN6WydNMemBAoPJXPo4s/pubhtml" style="color:#FFF;font-weight: bold;">here</a>.
						</div>
					</div>
					<div class = "col-md-6">
						<a href ="#collapse2" data-toggle="collapse">
							<img src = "img/basketball_player.png" class="img-rounded hidden-xs hidden-sm" height="128px"></img>
							<h3 class="collapse-text">House Basketball</h3>
						</a>
						<div class="collapse" id="collapse2">
							House Basketball
						</div>
					</div>
				</div>
				</br>
				<div class = "row">
					<div class = "col-md-6">
						<a href ="#collapse3" data-toggle="collapse">
							<img src = "img/volleyball_player.png" class="img-rounded hidden-xs hidden-sm" height="128px"></img>
							<h3 class="collapse-text">House Volleyball</h3>
						</a>
						<div class="collapse" id="collapse3">
							House Volleyball features boys serving, spiking, and smashing their way through a single-elimination tourney. Both senior and junior variants are avaiable.
						</div>
					</div>
					<div class = "col-md-6">
						<a href ="#collapse4" data-toggle="collapse">
							<img src = "img/soccer_player.png" class="img-rounded hidden-xs hidden-sm" height="128px"></img>
							<h3 class="collapse-text">Junior House Soccer</h3>
						</a>
						<div class="collapse" id="collapse4">
							Junior House Soccer, in the field bubble, has all houses competing to win as many games in a round robin regular season.
						</div>
					</div>
				</div>
			</div>
			<a class="page-scroll btn btn-default btn-lg" href="#schedule" style="color:white;background-color:#337ab7;border:0px;"><span class="glyphicon glyphicon-chevron-down" aria-hidden="true"></span></a>
		</section>

		<section id="schedule" class ="section-one">
			<div class="table-responsive img-responsive">
				<h1>Schedule</h1>
				<table style="width:100%;">
					<tr class="table-index">
						<td></td>
						<td>Monday</td>
						<td>Tuesday</td>
						<td>Wednesday</td>
						<td>Thursday</td>
						<td>Friday</td>
					</tr>
					<tr>
						<td class="table-index">Special Events</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td class="table-index">Before School</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td class="table-index">During School</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td class="table-index">Lunch</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td class="table-index">After School</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
				</table>
			</div>

			<a class="page-scroll btn btn-default btn-lg" href="#standings" style="color:black;background-color:#FFF;border:0px;"><span class="glyphicon glyphicon-chevron-down" aria-hidden="true"></span></a>

		</section>

		<section id="standings" class="section-two">
			<div class="container">
				<h1>Prefects Cup Points Standings</h1>
				<h3>These are updated periodically; they won't always be accurate to today's date.</h3>
				<div id="graph_houseStandings" style="width:600px;height:250px;" class="img-responsive"
				></div>
				<a class="page-scroll btn btn-default btn-lg" href="#contact" style="color:white;background-color:#337ab7;border:0px;"><span class="glyphicon glyphicon-chevron-down" aria-hidden="true"></span></a>
			</div>
		</section>

		<section id="contact" class="section-one">
			<div class="container">
				<h2>Thanks For Supporting Your House!</h2>
				<h1>Need to contact us?</h1>
				<div class="row">
					<div class="col-md-4">
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
					<div class="col-md-4">
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
					<div class="col-md-4">
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
					<div class="col-md-4">
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
					<div class="col-md-4">
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
					<div class="col-md-4">
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
					<div class="col-md-4">
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
					<div class="col-md-4">
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
					<div class="col-md-4">
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
		<script src="js/plotly.js"></script>
		<script type="text/javascript">

			//This part is just importing the variables from the previous database import of the standings values.
			var bremner = "<?= $standings['bremner'] ?>";
			var howard = "<?= $standings['howard'] ?>";
			var jackson = "<?= $standings['jackson'] ?>";
			var martland = "<?= $standings['martland'] ?>";
			var mchugh = "<?= $standings['mchugh'] ?>";
			var mowbray = "<?= $standings['mowbray'] ?>";
			var orr = "<?= $standings['orr'] ?>";
			var scadding = "<?= $standings['scadding'] ?>";
			var seaton = "<?= $standings['seaton'] ?>";
			var wedd = "<?= $standings['wedd'] ?>";
			/*
			//implements the bar graph
			Morris.Bar({
				element: '_houseStandings',
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
			*/

			//club month info

			var xValue = ['Bremner\'s', 'Howard\'s', 'Jackson\'s', 'Martland\'s', 'McHugh\'s', 'Mowbray\'s', 'Orr\'s', 'Scadding\'s', 'Seaton\'s', 'Wedd\'s'];

			var yValue = [bremner, howard, jackson, martland, mchugh, mowbray, orr, scadding, seaton, wedd];

			var trace1_houseStandings = {
				x: xValue,
  			y: yValue,
				type: 'bar',
			};

			var data_houseStandings = [trace1_houseStandings];

			var annotationContent_houseStandings = [];

			var layout_houseStandings = {
				title: 'Standings',
				xaxis: {
					title: 'House'
				},
				yaxis: {
					title: 'Total Points'
				},
				font: {
					family: '"Nexa Light","Open Sans", verdana, arial, sans-serif'
				},
				paper_bgcolor: 'rgba(0,0,0,0)',
				plot_bgcolor: 'rgba(0,0,0,0)',
				annotations: annotationContent_houseStandings
			};

			//global info
      var tweaks = {
        /*
        showLink: false,
        displaylogo: false
        */
        displayModeBar: false
      }

			for( var i = 0 ; i < xValue.length ; i++ ){
			  var result = {
			    x: xValue[i],
			    y: yValue[i],
			    text: yValue[i],
			    xanchor: 'center',
			    yanchor: 'bottom',
			    showarrow: false
			  };
			  annotationContent_houseStandings.push(result);
			}


			Plotly.newPlot('graph_houseStandings', data_houseStandings, layout_houseStandings, tweaks);
		</script>

	</body>

</html>
