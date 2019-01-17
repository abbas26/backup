<?php
$servername = "localhost";
$username   = "root";
$password   = "123";
$dbname     = "facebook";

$connect = mysqli_connect($servername, $username, $password, $dbname);

if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}

//make table category in db facebook
$query		= "CREATE TABLE user (
			id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
			firstName VARCHAR(50) NOT NULL,
			lastName VARCHAR(50) NOT NULL,
			userName VARCHAR(100) NOT NULL,
			password VARCHAR(50) NOT NULL,
			birth_day DATE NOT NULL,
			sex BOOLEAN NOT NULL
)";
mysqli_query($connect, $query);
?>
