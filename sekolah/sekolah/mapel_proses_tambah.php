<?php
include 'koneksi.php';
$nama		= $_POST['nama'];
$pengajar	= $_POST['pengajar'];
$status		= $_POST['status'];

$sql2 = "INSERT INTO mata_pelajaran (nama, pengajar, status) VALUES ('$nama','$pengajar','$status')";
mysqli_query($connect, $sql2);
header('location:mapel_index.php');
?>