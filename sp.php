<?php
	require_once 'connect.php';

	print "<h2>MySQL: Stored Procedure</h2>";

	if (!$mysqli->query("DROP PROCEDURE IF EXISTS insert_user") || !$mysqli->query("CREATE PROCEDURE insert_user(IN name VARCHAR(50), salary INT, age INT) BEGIN INSERT INTO node_user(name,salary,age) VALUES(name,salary,age); END;")) {
	    echo "Error: (" . $mysqli->errno . ") " . $mysqli->error;
	}

	print '<h3>MYSQLI: Insert</h3>';
	$rs = $mysqli->query("CALL insert_user('test', 234, 234)");

	if($rs) {
		echo "Data inserted";
	}

	print '<h3>MYSQLI: Select</h3>';

	if (!$mysqli->query("DROP PROCEDURE IF EXISTS select_user") || !$mysqli->query("CREATE PROCEDURE select_user() BEGIN SELECT * FROM node_user; END;")) {
	    echo "Error: (" . $mysqli->errno . ") " . $mysqli->error;
	}

	$result = $mysqli->query("CALL select_user");

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