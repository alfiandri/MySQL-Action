<?php
	require_once 'connect.php';

	print "<h2>MySQL: Simple Row</h2>";

	$sql = "SELECT * FROM node_user";
	$result = $mysqli->query($sql) or die($mysqli->error);

	echo "<table border='1'>
	<tr>
		<th>Name</th>
		<th>Salary</th>
		<th>Age</th>
	</tr>";


	while($row = $result->fetch_array())
	{
		echo "<tr>";
		echo "<td>" . $row['name'] . "</td>";
		echo "<td>" . $row['salary'] . "</td>";
		echo "<td>" . $row['age'] . "</td>";
		echo "</tr>";
	}

	echo "</table>";


	print "<h2>CREATE MySQL Trigger In PHP</h2><p>Capitalize word</p>";

	$sql = "CREATE TRIGGER test_trigger BEFORE UPDATE ON node_user FOR EACH ROW SET NEW.name=UPPER(NEW.name);";

	print "<b>Query : </b>" . $sql . "<br>";

	$result = $mysqli->query($sql) or die($mysqli->error);

	print "<h2>MySQL: Update Statement</h2>";

	$sql = "UPDATE node_user SET name='Alfiandri Putra P.' where id=1";

	print "<b>Query :</b> " . $sql;

	$result = $mysqli->query($sql) or die($mysqli->error);

	if ($result) {
		echo "<br>Table has been updated.";
	} else {
		echo "<br>Something went wrong";
	}

	print "<h2>MySQL: Effect of Trigger</h2>";

	echo "<table border='1'>
	<tr>
		<th>Name</th>
		<th>Salary</th>
		<th>Age</th>
	</tr>";

	$sql = "SELECT * FROM node_user";
	$result = $mysqli->query($sql) or die($mysqli->error);

	while($row = $result->fetch_array())
	{
		echo "<tr>";
		echo "<td>" . $row['name'] . "</td>";
		echo "<td>" . $row['salary'] . "</td>";
		echo "<td>" . $row['age'] . "</td>";
		echo "</tr>";
	}
	echo "</table>";

	$mysqli->query("DROP TRIGGER test_trigger") or die($mysqli->error);