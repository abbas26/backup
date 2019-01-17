<form method="POST">
VARIABEL DAN OPERATOR<br><br>
	<input type="number" name="angka1" placeholder="Masukan Angka 1"/> - 
	<input type="number" name="angka2" placeholder="Masukan Angka 2"/>
	<button type="submit">CEK HASIL</button><br>
</form>

<?php
$a = isset($_POST['angka1'])?$_POST['angka1']:"";
$b = isset($_POST['angka2'])?$_POST['angka2']:"";
$c = (($b + $a**2) - $b + ($a * 2))  * ($b / 2);

if (empty($a . $b)) {
	echo "";
}
else {
	echo "(($b + $a<sup>2</sup>) - $b + ($a x 2)) x ($b : 2) = $c";
}

?>
