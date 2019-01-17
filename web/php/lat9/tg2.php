<form method="POST">
Tugas No. 2<br><br>
	<input type="text" name="diskon" placeholder="Masukan Jumlah Harga"/>
	<button type="submit">CEK DISKON</button><br>
</form>

<?php
$b = (isset($_POST ['diskon'])?$_POST ['diskon']:"0");
$c = ($b * 0.175);
$d = ($b - $c);

	echo "Harga awal barang ini adalah Rp $b<br>";
	echo "Selamat anda mendapat diskon sebesar 17,5%<br>";
	echo "harga setelah diskon adalah: Rp $d";
?>
