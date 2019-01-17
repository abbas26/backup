<form method="POST">
LATIHAN 1<br><br>
	<input type="text" name="kata" placeholder="Masukan Kata"/>
	<button type="submit">CEK KATA</button><br>
</form>

<?php
$a = isset($_POST['kata'])?$_POST['kata']:"";
$b = explode(" ", $a);
$c = implode("+", $b);
$d = substr($c, 3);
$e = strtoupper(substr($c, 0, 3));

echo $e . $d;

?>
