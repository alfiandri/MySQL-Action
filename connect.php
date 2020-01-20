<?php
	session_start();
	
	$db_user = "root";
	$db_name = "db_tugas";
	$db_password = "";

	$mysqli = new mysqli("localhost", $db_user, $db_password, $db_name);

	if ($mysqli->connect_errno) {
	  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
	  exit();
	}

	// Turn autocommit off
	$mysqli->autocommit(FALSE);

	$sql = "SELECT * FROM sepeda";
	$result = $mysqli->query($sql) or die($mysqli->error);

	$row = $result->fetch_assoc();