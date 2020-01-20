<?php
	require_once 'connect.php';

	print "<h2>MySQL: View</h2>";

	$sql = "CREATE VIEW alfi_view AS SELECT * from node_user";
	print "<b>Query</b> : " . $sql . "<br>";
	$result = $mysqli->query($sql) or die($mysqli->error);

	$sql = "SELECT * FROM alfi_view";
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

	$mysqli->query("DROP VIEW alfi_view") or die($mysqli->error);