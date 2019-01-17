<?php
	//1. Fungsi For 1	
	$buah = array("Jambu", "Pelem", "Kates", "Dondong", "Talok");
		echo "Dibawah ini adalah daftar buah yang suka :";
		echo "<br>";		
			$jml = count($buah);
			for($x = 0; $x < $jml; $x++) {		
				echo "<li>".$buah[$x]."</li>";
			}
echo "<br>";
echo "<hr>";
echo "<br>";

	//2. Fungsi For 2
	$air = array("Aqua", "Total", "Vit", "Club", "Zonk");
		echo "Daftar air mineral kemasan :";
		echo "<br>";		
			$jml = count($air);
			for($x = 2; $x < $jml; $x++) {		
				echo "<li>".$air[$x]."</li>";
			}

echo "<br>";
echo "<hr>";

	//3. Fungsi For 3
	$sayur = array
	  (
	  array("Tomat","Terong","Timun"),
	  array("Bayam","Brokoli","Bung Bambu"),
	  array("Seledri","Sawi","Selada"),
	  array("Cabe","Celedri","Cawi")
	  );
		for ($row = 0; $row < 4; $row++) {
			echo "<p><b>Berikut adalah jenis jenis sayur dimulai dari jenis $row</b></p>";
			echo "<ul>";
				for ($col = 0; $col < 3; $col++) {
				echo "<li>".$sayur[$row][$col]."</li>";
				}
			echo "</ul>";
		}

echo "<hr>";

?>
