<?php
  require '../common.php';
		$query = "
     SELECT * FROM standings WHERE id = 1
    ";
    try {
			$stmt = $db->prepare($query);
			$stmt->execute();
		}

		catch(PDOException $ex)
		{
			die("Failed to run query: " . $ex->getMessage());
		}
    $row = $stmt->fetch();
    echo json_encode($row);
?>
