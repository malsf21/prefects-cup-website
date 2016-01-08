<?php
	require("common.php");

	$query = "SELECT * FROM schedule";
	 
	try 
	{ 
		$stmt = $db->prepare($query); 
		$stmt->execute();
	} 

	catch(PDOException $ex) 
	{ 
		die("Failed to run query: " . $ex->getMessage()); 
	}  

	$schedule = $stmt->fetch();
	
?>