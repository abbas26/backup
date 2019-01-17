<form method="POST">
KETIKAN ANGKA UNTUK DI PROSES<br><br>
	<input type="number" name="angka" placeholder="Masukan angka"/> 	<button type="submit">CEK HASIL</button><br>
</form>

<?php
//Suryo Widiyanto Gumelar
$a = isset($_POST['angka'])?$_POST['angka']:"";

function ubah($a){
$x = $a;
$b = array('0','1','2','3','4','5','6','7','8','9');
$c = array(' nol ',' satu ',' dua ',' tiga ',' empat ',' lima ',' enam ',' tujuh ',' delapan ',' sembilan ');
return str_replace($b, $c, $x);
	}

if (empty($a)){
	echo " ";
}
else {
	echo ubah($a);
}
?>
