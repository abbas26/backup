<html>
	<head>
		<title>Edit Data</title>
	</head>
	<body>
		<?php
		include 'koneksi.php';
		$ID     = $_GET['id'];
		$sql    = "SELECT * FROM siswa WHERE id=$ID";
		$result = mysqli_query($connect, $sql);
		$row    = mysqli_fetch_assoc($result);
		?>
		<p align="center">EDIT DATA SISWA</p>
		<form action="proses_edit.php" method="POST">
			<table border="0" align="center" cellpadding="10">
			
			<tr>
			<td colspan="3"><input type="hidden" name="id" value="<?php echo $ID; ?>"></td>
			</tr>

			<tr>
			<td><label for="nama">Nama Siswa</label></td>
			<td>:</td>
			<td><input type="text" name="nama" id="nama" value="<?php echo $row['nama']; ?>" disabled></td>
			</tr>

			<tr>
			<td><label for="kelas">Kelas</label</td>
			<td>:</td>
			<td><select id="kelas" style="width:175px" name="kelas" disabled>
				<option><?php echo $row['kelas']; ?></option>
				<option>1A</option>
				<option>1B</option>
				<option>2A</option>
				<option>2B</option>
				<option>3A</option>
				<option>3C</option>
			</select><br></td>
			</tr>
			
			<tr>
			<td><label for="mapel">Mata Pelajaran</label></td>
			<td>:</td>
			<td><select id="mapel" style="width:175px" name="mapel">
				<option><?php echo $row['mapel']; ?></option>
				<option>IPA</option>
				<option>IPS</option>
				<option>Matematika</option>
				<option>Bahasa Indonesia</option>
				<option>Bahasa Inggris</option>
				<option>Bahasa Jawa</option>
				<option>PJOK</option>
			</select><br></td>
			</tr>

			<tr>
			<td><label for="nilai">Nilai</label></td>
			<td>:</td>
			<td><input type="text" name="nilai" id="nilai" value="<?php echo $row['nilai']; ?>"></td>
			</tr>
			
			<tr>
			<td colspan="3" align="center"><input type="submit" value="Submit"></td>
			</tr>
			</table>
		</form>
	</body>
</html>
