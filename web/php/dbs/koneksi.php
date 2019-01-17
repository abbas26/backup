<?php
$sql = mysqli_connect("localhost", "phpmyadmin", "123", "latihan");

if (!$sql) {
	die ("Gagal menghubungkan ke databases");
	//echo "Error: Unable to connect to MySQL." . PHP_EOL;
	//echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
	//echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
	//exit;
}

echo "Kamu sukses akses databases";
//echo "Host information: " . mysqli_get_host_info($sql) . PHP_EOL;

//mysqli_close($sql);
?>
