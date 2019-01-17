<?php
$bahasa = array("Bahasa PHP","Bahasa Delphi","Bahasa MySQL","Bahasa C++","Bahasa PERL");
$nama = array(
	array("Anto","Edi","Sita"),
	array("Anto","Budi"),
	array("Nana","Alif","Jordan","Rahmat"),
	array("Masto","Ruri","Omar"),
	array("Andi"),
	);

for ($a = 0; $a <= 4; $a++) {
	echo $bahasa[$a]."<br>";
	for ($i=1; $i <= 5 ; $i++) {
		echo $i++.".".$nama[1][1]."<br>";
	}
}
?>