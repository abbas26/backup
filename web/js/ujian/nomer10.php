<?php
$in 	= 66;

if (($in <= 100) && ($in >= 90)) {
	echo "Mendapat Nilai A";
} elseif (($in <= 89) && ($in >= 70)) {
	echo "Mendapat Nilai B";
} elseif (($in <= 69) && ($in >= 50)) {
	echo "Mendapat Nilai C";
} elseif (($in <= 49) && ($in >= 30)) {
	echo "Mendapat Nilai D";
} else {
	echo "Mendapat Nilai E";
}
?>