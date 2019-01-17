<!DOCTYPE html>
<html>
<head>
	<title>Data Kelas</title>
</head>
<body>

	<table align="center">
		<tr>
			<td><a href="index.php">NILAI SISWA</td>
			<td><a href="kelas_index.php">DATA KELAS</td>
			<td><a href="mapel_index.php">DATA MATA PELAJARAN</td>
		</tr>
	</table>

	<p align="center"><a href="kelas_tambah.php">TAMBAHKAN DATA KELAS</a></p>
	<table border="1" align="center" cellpadding="10">
		<tr align="center">
			<td>No.</td>
			<td>Nama Siswa</td>
			<td>Status</td>
		</tr>
	<?php
	include 'koneksi.php';
	$nomor		= 1;
	$sql1		= "select * from kelas";
	$result		= mysqli_query($connect, $sql1);

	function jika($status) {
		if ($status==1) {
			return "Active";
		} else {
			return "Non-Active";
		}
	}

	if (mysqli_num_rows($result)>0) {
		while ($row = mysqli_fetch_assoc($result)) {
			echo "
				<tr>
					<td>".$nomor++."</td>
					<td>".$row['nama']."</td>
					<td>".jika($row['status'])."</td>
				</tr>
			";
		}
	}



	?>
		</table>
	</body>
</html>