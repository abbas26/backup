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
				<td><input type="text" name="nama" id="nama" placeholder=" Masukan nama siswa" required></td>
				</tr>

				<tr>
				<td><label for="kelas">Kelas</label></td>
				<td>:</td>
				<td><select id="kelas" style="width:175px" name="kelas" required>
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
				<td><label for="mapel">Mata Pelajaran</label></td>
				<td>:</td>
				<td><select id="mapel" style="width:175px" name="mapel" required>
					<option value="">-- Silahkan Pilih --</option>
					<option value="IPA">IPA</option>
					<option value="IPS">IPS</option>
					<option value="Matematika">Matematika</option>
					<option value="Bahasa Indonesia">Bahasa Indonesia</option>
					<option value="Bahasa Inggris">Bahasa Inggris</option>
					<option value="Bahasa Jawa">Bahasa Jawa</option>
					<option value="PJOK">PJOK</option>
				</select></td>
				</tr>

				<tr>
				<td><label for="nilai">Nilai</label></td>
				<td>:</td>
				<td><input type="text" name="nilai" id="nilai" placeholder=" Masukan nilai siswa" required></td>
				</tr>

				<tr align="center">
				<td colspan="3"><input type="submit" value="Submit"></td>
				</tr>
				</table>
		</form>
	</body>
</html>
