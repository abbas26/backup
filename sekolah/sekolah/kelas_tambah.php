<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data Kelas</title>
</head>
<body>
	<p align="center">INPUT DATA KELAS</p>
	<form action="kelas_proses_tambah.php" method="POST">
		<table align="center" cellpadding="10">
			<tr>
				<td><input type="hidden" name="id" id="id" value="<?php echo $ID; ?>"></td>
			</tr>

			<tr>
				<td><label for="nama">Nama Kelas</label></td>
				<td>:</td>
				<td><select id="nama" style="width:175px" name="nama">
					<option value="">-- Silahkan Pilih --</option>
					<option value="1A">1A</option>
					<option value="1B">1B</option>
					<option value="2A">2A</option>
					<option value="2B">2B</option>
					<option value="3A">3A</option>
					<option value="3C">3C</option>
				</select></td>
			</tr>

			<tr>
				<td><label for="status">Status</label></td>
				<td>:</td>
				<td><select id="status" style="width:175px" name="status">
					<option value="">-- Silahkan Pilih --</option>
					<option value="1">Active</option>
					<option value="0">Non-Active</option>
				</select></td>
			</tr>

			<tr align="center">
				<td colspan="3"><input type="submit" value="Submit"></td>
			</tr>
		</table>
	</form>

</body>
</html>