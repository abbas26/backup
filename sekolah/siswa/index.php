<html>
<head>
	<title>Data Sekolah</title>
</head>
<body>
	<p align="center"><a href="tambah.php">TAMBAHKAN DATA</a></p>
	<table border="1" align="center" cellpadding="10">
		<tr align="center">
			<td>No.</td>
			<td>Nama Siswa</td>
			<td>Kelas</td>
			<td>Mata Pelajaran</td>
			<td>Nilai</td>
			<td>Action</td>
		</tr>

		<?php
		include 'koneksi.php';
		$nomor = 1;
		$sql = "select * from siswa";
		$result = mysqli_query($connect, $sql);

		if (mysqli_num_rows($result)>0) {
			while ($row = mysqli_fetch_assoc($result)) {
				echo "
					<tr>
						<td>".$nomor++."</td>
						<td>".$row['nama']."</td>
						<td>".$row['kelas']."</td>
						<td>".$row['mapel']."</td>
						<td>".$row['nilai']."</td>
						<td>
						<a href='edit.php?id=".$row['id']."'>Edit</a> | 
						<a href='hapus.php?id=".$row['id']."' onclick='javascript:return confirm(\"Apakah anda yakin ingin menghapus data ini?\")'>Hapus</a>
						</td>
					</tr>
				";
			}
		}
		?>

		</table>
	</body>
</html>