<?php

$servername = "localhost";
$username   = "root";
$password   = "123";

$connect = mysqli_connect($servername, $username, $password);

if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}

$createdb	= "CREATE database facebook";
mysqli_query($connect, $createdb)

?>
