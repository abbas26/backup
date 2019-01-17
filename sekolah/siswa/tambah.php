<html>
	<head>
		<title>Tambah Data</title>
	</head>
	<body>
		<p align="center">INPUT DATA NILAI SISWA</p>
		<form action="proses_tambah.php" method="POST">
			<table align="center" border="0" cellpadding="10">
				<tr>
				<td colspan="3"><input type="hidden" name="id" id="id" value="<?php echo $ID; ?>"></td>
				</tr>

				<tr>
				<td><label for="nama">Nama Siswa</label></td>
				<td>:</td>
				<td><input type="text" name="nama" id="nama"></td>
				</tr>

				<tr>
				<td><label for="kelas">Kelas</label></td>
				<td>:</td>
				<td><select id="kelas" style="width:175px" name="kelas">
					<option></option>
					<option>1A</option>
					<option>1B</option>
					<option>2A</option>
					<option>2B</option>
					<option>3A</option>
					<option>3C</option>
				</select></td>
				</tr>

				<tr>
				<td><label for="mapel">Mata Pelajaran</label></td>
				<td>:</td>
				<td><select id="mapel" style="width:175px" name="mapel">
					<option></option>
					<option>IPA</option>
					<option>IPS</option>
					<option>Matematika</option>
					<option>Bahasa Indonesia</option>
					<option>Bahasa Inggris</option>
					<option>Bahasa Jawa</option>
					<option>PJOK</option>
				</select></td>
				</tr>

				<tr>
				<td><label for="nilai">Nilai</label></td>
				<td>:</td>
				<td><input type="text" name="nilai" id="nilai"></td>
				</tr>

				<tr align="center">
				<td colspan="3"><input type="submit" value="Submit"></td>
				</tr>
				</table>
		</form>
	</body>
</html>
