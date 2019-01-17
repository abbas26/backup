<?php
include 'connect.php';
$ID 	= $_POST['id'];
$mapel	= $_POST['mapel'];
$nilai	= $_POST['nilai'];

$sql = "UPDATE siswa SET mapel = '$mapel', nilai = '$nilai' WHERE id = '$ID' or nama = '$nama'";
mysqli_query($connect,$sql);
header('location:index.php');
?>
