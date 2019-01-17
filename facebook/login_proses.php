<?php

include 'koneksi.php';

$user 		= $_POST['login_user'];
$password	= $_POST['login_pass'];

if (!empty($user) && !empty($password)) {
	$sql	= mysqli_query($connect, "SELECT * FROM user WHERE userName='$user' AND password='$password'" );
	$result = mysqli_num_rows($sql);
	if ($result) {
		$row = mysqli_fetch_array($sql);
		session_start();
		$_SESSION['login'] = true;
		$_SESSION['user'] = $user;
		$_SESSION['user_id'] = $row['id'];
		header("location:http://www.facebook.com");
	} else {
		echo"Email dan password anda Salah!!!!";
	}
	} else {
		echo "Email dan password anda kosong, silahkan masukan ulang";
	}

?>