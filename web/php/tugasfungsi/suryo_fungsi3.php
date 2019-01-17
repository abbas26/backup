<form method="GET">
FUNGSI 3<br><br>
	<input type="number" name="kata" placeholder="Masukan Angka"/>
	<button type="submit">CEK ANGKA</button><br>
</form>

<?php

$bil = $_GET['kata'];
$n = $bil;
$status = "PRIMA"; 
	for ($i = 2; $i <= $n-1; $i++) {
		if ($n % $i == 0)
		{

$status = "TIDAK PRIMA";
	break;
		}
		}
		
echo "Bilangan ".$n." adalah : ".$status;

?>
