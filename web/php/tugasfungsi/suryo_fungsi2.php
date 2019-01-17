<form method="POST">
FUNGSI 2<br><br>
	<input type="text" name="kata" placeholder="Masukan Kata"/>
	<button type="submit">CEK KATA</button><br>
</form>

<?php
$in = isset($_POST['kata'])?$_POST['kata']:"";
$kur = strlen($in)-3;

function hit($in) {
		$n = strlen($in);
		return $n;
}

	if (empty($in)) {
		echo "";
	}
	elseif (hit($in) > 5 ) {
		function bin($in, $kur) {
			for ($x=0; $x<$kur; $x++) {
				echo "*";
		}
		echo substr($in, $kur, 3);
		}
		echo bin($in, $kur);
	}
	elseif(hit($in) <= 5) {
		function kurang($in){
			echo $in.strrev($in);
		}
		echo kurang($in);
}
?>
