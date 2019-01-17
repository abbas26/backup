<?php
include 'koneksi.php';
$ID 				= $_POST['id'];
$firstName			= $_POST['depan'];
$lastName			= $_POST['belakang'];
$userName			= $_POST['userName'];
$password			= $_POST['password'];

$tahun				= $_POST['tahun'];
$bulan				= $_POST['bulan'];
$tanggal			= $_POST['tanggal'];

$birth_day			= $tahun.$bulan.$tanggal;
$sex				= $_POST['gender'];

$sql = "INSERT INTO user (firstName, lastName, userName, password, birth_day, sex) VALUES ('$firstName','$lastName','$userName','$password','$birth_day','$sex')";
mysqli_query($connect,$sql);
header('location:index.php');
?>
