<form method="POST">
LATIHAN<br><br>
	<input type="text" name="kata" placeholder="Masukan Kata"/>
	<button type="submit">CEK KATA</button><br>
</form>

<?php

$kata = $_POST['kata'];
$cek = strlen($kata);

if (empty($cek)) {
	echo "";
}
else if ($cek < 6) {
	echo $kata."***";
}
elseif ($cek >=6) {
	echo $kata."-".$kata."-".$kata;
}

?>

/*$a = "x";
$b = 7;

	for ($x=0; $x<$b; $x+=2) {
		for ($y=0; $y<=$x; $y+=2) {
		echo $a.$a;
		}
		echo "<br>";
	}*/
	
/*$menu = strtolower($_POST['menu']);

switch ($menu) {
		case "";
				echo "Pesanlah Sesuatu...";
				break;
    case "kopi":
    case "coklat":
    case "susu":
    case "teh":
        echo "Good Choice...";
        break;
    case "alkohol":
    case "bangkai":
    case "darah":
        echo "Worse Choice...";
        break;
    default:
        echo "Pesanan anda tidak ada di menu kami";
}*/
