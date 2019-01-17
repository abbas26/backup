<?php
include 'koneksi.php';
$nama		= $_POST['nama'];
$status		= $_POST['status'];

$sql1 = "INSERT INTO kelas (nama, status) VALUES ('$nama','$status')";
mysqli_query($connect, $sql1);
header('location:kelas_index.php');
?>