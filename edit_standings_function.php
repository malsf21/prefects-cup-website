<?php 
	require("common.php"); 
	
	if(
		empty($_POST['bremner'])  ||
		empty($_POST['howard'])   ||
		empty($_POST['jackson'])  ||
		empty($_POST['martland']) ||
		empty($_POST['mchugh'])   ||
		empty($_POST['mowbray'])  ||
		empty($_POST['orr'])      ||
		empty($_POST['scadding']) ||
		empty($_POST['seaton'])   ||
		empty($_POST['wedd'])     
	) { 
		die("You missed a field"); 
	}

	$_POST = filter_var_array($_POST, FILTER_SANITIZE_STRING);

	$bremner = $_POST['bremner'];
	$howard = $_POST['howard'];
	$jackson = $_POST['jackson'];
	$martland = $_POST['martland'];
	$mchugh = $_POST['mchugh'];
	$mowbray = $_POST['mowbray'];
	$orr = $_POST['orr'];
	$scadding = $_POST['scadding'];
	$seaton = $_POST['seaton'];
	$wedd = $_POST['wedd'];
	$date = $_POST['date'];

	$query = " 
	REPLACE INTO standings (
		bremner,
		howard,
		jackson,
		martland,
		mchugh,
		mowbray,
		orr,
		scadding,
		seaton,
		wedd
	) VALUES (
		'$bremner',
		'$howard',
		'$jackson', 
		'$martland', 
		'$mchugh',
		'$mowbray',
		'$orr',
		'$scadding',
		'$seaton',
		'$wedd'
	);";

	try { 
		$stmt = $db->prepare($query); 
		$stmt->execute();
	
		header("Location: index.php"); 		 
	}
	
	catch(PDOException $ex) 
	{ 
		die("Failed to run query: " . $ex->getMessage()); 
		header("Location: index.php");
	}
?>