<?php
//buat variable
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "latihan";

//create databases
$connect = mysqli_connect($servername, $username, $password, $dbname);

//check connection
if (!$connect) {
	die("Connection Failed" . mysqli_connect_error());
}
//create table
$sql = "CREATE TABLE siswa (
id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
nama VARCHAR(50) NOT NULL,
kelas VARCHAR(30) NOT NULL,
mapel VARCHAR(30) NOT NULL,
nilai VARCHAR(8) NOT NULL
)";
mysqli_query($connect, $sql); //mengkoneksikan query crate table ke databases

?>