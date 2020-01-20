<?php
	require_once 'connect.php';

	if (isset($_POST['submit'])) {
		unset($_SESSION);
		
		$nama_sepeda = $_POST['nama_sepeda'];
		$jumlah		 = $_POST['jumlah'];

		$mysqli->query("UPDATE sepeda SET nama_sepeda='$nama_sepeda', jumlah='$jumlah'") or die($mysqli->error);

		// Commit transaction
		if ($mysqli->commit()) {
			$mysqli->close();

			$_SESSION['msg'] = "Commit transaction success";

			return header("location:index.php");
		} else {
			$_SESSION['msg'] = "Commit transaction failed";

			// Rollback transaction
			$mysqli->rollback();
			$mysqli->close();

			return header("location:index.php");
		}

		

	}