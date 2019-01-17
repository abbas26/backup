<form method="GET">
FUNGSI 3<br><br>
	<input type="number" name="angka" placeholder="Masukan Panjang Jari Jari (cm)" style="width:250px"/>
	<button type="submit">CEK HASIL</button><br>
</form>

<?php
$a  = $_GET['angka'];
$b = $a;
$c = 3.14;

function luas($b, $c) {
    return 4 * $c * $b;
}

echo "Luas Bola : 4 x 3,14 x $b x $b = " . luas($b, $c) . " cm<sup>3</sup>";

?>
