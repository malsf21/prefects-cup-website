<?php 
	require("common.php"); 
	if(!empty($_POST)) { 
		if(
			empty($_POST['name'])        ||
			empty($_POST['competitors']) ||
			empty($_POST['day'])         ||
			empty($_POST['date'])        ||
			empty($_POST['time'])        ||
			empty($_POST['start'])       ||
			empty($_POST['location'])    ||
			empty($_POST['organiser'])   ||
			empty($_POST['about'])
		) { 
			die("You missed a field"); 
		}

		$_POST = filter_var_array($_POST, FILTER_SANITIZE_STRING);

		$name = $_POST['name'];
		$competitors = $_POST['competitors'];
		$day = $_POST['day'];
		$date = $_POST['date'];
		$time = $_POST['time'];
		$start = $_POST['start'];
		$location = $_POST['location'];
		$organiser = $_POST['organiser'];
		$about = $_POST['about'];

		$query = " 
		INSERT INTO schedule (
			name,
			competitors,
			day,
			date,
			time,
			start,
			location,
			organiser,
			about
		) VALUES (
			'$name',
			'$competitors',
			'$day',
			'$date', 
			'$time', 
			'$start',
			'$location',
			'$organiser',
			'$about'
		);";

		try { 
			$stmt = $db->prepare($query); 
			$stmt->execute();
		
			header("Location: control.php"); 		 
		}
		
		catch(PDOException $ex) 
		{ 
			die("Failed to run query: " . $ex->getMessage()); 
			header("Location: control.php");
		}
	}
?>