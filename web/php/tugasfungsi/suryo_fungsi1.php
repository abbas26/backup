<form method="POST">
FUNGSI 1<br><br>
	<input type="text" name="kata" placeholder="Masukan Kata"/>
	<button type="submit">CEK KATA</button><br>
</form>

<?php

function kap () {
		return strtoupper($_POST['kata']); 
}

function hit () {
		return str_word_count($_POST['kata']); 
}

echo kap() . "<br>";
echo "Jumlah kata yang anda ketik ada " . hit() . " kata";

?>
