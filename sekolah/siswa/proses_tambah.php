<?php
include 'koneksi.php';
$nama	= $_POST['nama'];
$kelas	= $_POST["kelas"];
$mapel	= $_POST["mapel"];
$nilai	= $_POST['nilai'];

$sql = "INSERT INTO siswa (nama, kelas, mapel, nilai) VALUES ('$nama','$kelas','$mapel','$nilai')";
mysqli_query($connect, $sql);
header('location:index.php');
?>
