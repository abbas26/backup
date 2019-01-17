<form method="POST">
Tugas No. 1<br><br>
<input type="text" name="awal" placeholder="Masukan Jumlah Harga"/>
<button type="submit">Submit</button>
</form>

<?php
$a = (empty($_POST ['awal']));

if ($a < 30000) {
	echo "Tambah lagi belanjaanmu sampai Rp 30.000!";
	}
elseif ($a > 30000) {
	echo "Kurangi belanjaanmu!";
	}
elseif ($a = 30000) {
	echo "Buruan pulang, dirumah sudah lapar semua!";
	}
?>
