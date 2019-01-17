<?php
$in 	= 300000;
$diskon = $in - ($in*0.2);

echo "Total belanja anda adalah Rp" . $in;
echo "<br>";

if ($in > 200000) {
	echo "Selamat anda mendapat diskon sebesar 20%";
	echo "<br>";
	echo "Anda hanya membayar Rp".$diskon;
} else {
	echo "Terimakasih sudah berbelanja";
}
?>