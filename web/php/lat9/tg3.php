<form method="POST">	
Tugas No. 3<br><br>
	<input type="text" name="input" placeholder="Masukan Sesuatu"/>
	<button type="submit">Submit</button><br>
</form>

<?php
$input = $_POST ['input'];
$loop = 3;

for ($x=0; $x < $loop; $x++){
	for ($y=$loop; $y > $x; $y--){
	echo "*";
	}
		for ($a=0; $a <= $x; $a++){
		echo $input;
		}
for ($z=$x; $z < $loop; $z++){
	echo "*";
	}
	echo "<br>";
	}

?>
