<?php
	require("common.php");

	$query = "SELECT * FROM standings";
	 
	try 
	{ 
		$stmt = $db->prepare($query); 
		$stmt->execute();
	} 

	catch(PDOException $ex) 
	{ 
		die("Failed to run query: " . $ex->getMessage()); 
	}  

	$standings = $stmt->fetch();
	
?>