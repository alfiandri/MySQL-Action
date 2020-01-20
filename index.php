<?php
	require_once 'connect.php';
?>
<html>
	<head>
		<title>Commit Rollback</title>
	</head>
	<body>
		<center>
			<h4>
				<?php
					if (isset($_SESSION['msg'])) {
						echo $_SESSION['msg'];
					}
				?>
			</h4>
		</center>
		<form action="update.php" name="frmAdd" method="post">
			<table width="400" border="1">
				<tr>
					<td width="90"> <div align="left">Nama Sepeda </div></td>
					<td><input type="text" name="nama_sepeda" id="nama_sepeda" value="<?=$row['nama_sepeda']?>"></td>
				</tr>
				<tr>
					<td width="90"> <div align="left">Jumlah</div></td>
					<td><input type="text" name="jumlah" id="jumlah" value="<?=$row['jumlah']?>"></td>
				</tr>
			</table>
			<input type="submit" name="submit" value="Submit">
		</form>
	</body>
</html>