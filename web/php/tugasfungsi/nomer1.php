<form method="POST">
KETIKAN KALIMAT YANG MENGANDUNG KATA "AKU"<br><br>
	<input type="text" name="kata" placeholder="Masukan Kata"/> 	<button type="submit">CEK HASIL</button><br>
</form>

<?php
//Suryo Widiyanto Gumelar
$in = isset($_POST['kata'])?$_POST['kata']:"";

function ubah($in){
	return str_replace("aku", "saya", $in);
	}
	
echo ubah($in);
?>
