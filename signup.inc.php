<?php

	include_once 'database_connection.php';

	$name = $_POST['name'];
	$type = $_POST['type'];
	$plate = $_POST['plate'];
	$license = $_POST['license'];
	$orcr = $_POST['orcr'];

	$sql = "INSERT INTO owners (name, type, plate, license, orcr) VALUES ('$name', '$type', '$plate', '$license', '$orcr');";
	mysqli_query($conn, $sql);

	header("Location: admin_page.php?register=success");

?>