<?php
	require("common.php");
	if(!empty($_POST)) {

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
		$date = time();

		$query = "
		REPLACE INTO standings (
			date,
			bremner,
			howard,
			jackson,
			martland,
			mchugh,
			mowbray,
			orr,
			scadding,
			seaton,
			wedd,
			id
		) VALUES (
			'$date',
			'$bremner',
			'$howard',
			'$jackson',
			'$martland',
			'$mchugh',
			'$mowbray',
			'$orr',
			'$scadding',
			'$seaton',
			'$wedd',
			'1'
		);";

		try {
			$stmt = $db->prepare($query);
			$stmt->execute();

			header("Location: admin.php");
		}

		catch(PDOException $ex)
		{
			die("Failed to run query: " . $ex->getMessage());
			header("Location: admin");
		}
	}
?>
