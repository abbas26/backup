<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data Kelas</title>
</head>
<body>
	<p align="center">INPUT DATA KELAS</p>
	<form action="mapel_proses_tambah.php" method="POST">
		<table align="center" cellpadding="10">
			<tr>
				<td><input type="hidden" name="id" id="id" value="<?php echo $ID; ?>"></td>
			</tr>

			<tr>
				<td><label for="nama">Nama Mata Pelajaran</label></td>
				<td>:</td>
				<td><select id="nama" style="width:175px" name="nama">
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
				<td><label for="pengajar">Pengajar</label></td>
				<td>:</td>
				<td><input type="text" name="pengajar" id="pengajar" placeholder=" Masukan nama pengajar" required></td>
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