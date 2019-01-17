<?php
	//1. Skrip untuk Indexed Array
	echo "<h2>"."1. Ini adalah Skrip untuk Indexed Array"."</h2>";
	$buah = array("Jambu", "Pelem", "Kates", "Dondong", "Talok");
		echo "Saya suka buah " . $buah[0] . ", " . $buah[1] . ", " . $buah[2] . ", " . $buah[3] . " dan " . $buah[4];
		echo "<br>";
		//Fungsi count(menghitung)
		echo "Jadi saya suka buah sebanyak ";
		echo count($buah);
		echo " buah";
		echo "<br>";
		echo "Dibawah ini adalah daftar buah yang suka :";
		echo "<br>";
			//Fungsi Perulangan
			$jml = count($buah);
			for($x = 0; $x < $jml; $x++) {
				echo "<li>";		
				echo $buah[$x];
				echo "<br>";
			}

	echo "<br>";
	echo "<hr>";

	//2. Skrip untuk Associative Arrays
	echo "<h2>"."2. Ini adalah Skrip untuk Associative Arrays"."</h2>";
	$umur = array("Paijo"=>"25", "Paimin"=>"26", "Painem"=>"30", "Paijem"=>"23", "Paikem"=>"21");
		echo "Paijo menika sampun umur " . $umur['Paijo'] . " tahun";
		echo "<br>";
			//Fungsi Loop Through
			foreach($umur as $x => $x_value) {
			    echo "Asma = " . $x . ", Yuswo = " . $x_value;
			    echo "<br>";
			}

	echo "<br>";
	echo "<hr>";

	//3. Skrip Multidimensional Arrays
	echo "<h2>"."3. Ini adalah Skrip Multidimensional Arrays"."</h2>";
	$sayur = array
	  (
	  array("Wortel",50,18),
	  array("Kol",68,13),
	  array("Tomat",75,20),
	  array("Terong",49,15)
	  );
		echo "<b>".$sayur[0][0]."</b>"." neng kranjang iseh ono stok ".$sayur[0][1]." kg".", lan wes payu ".$sayur[0][2]." kg".".<br>";
		echo "<b>".$sayur[1][0]."</b>"." neng kranjang iseh ono stok ".$sayur[1][1]." kg".", lan wes payu ".$sayur[1][2]." kg".".<br>";
		echo "<b>".$sayur[2][0]."</b>"." neng kranjang iseh ono stok ".$sayur[2][1]." kg".", lan wes payu ".$sayur[2][2]." kg".".<br>";
		echo "<b>".$sayur[3][0]."</b>"." neng kranjang iseh ono stok ".$sayur[3][1]." kg".", lan wes payu ".$sayur[3][2]." kg".".<br>";

	echo "<br>";
	echo "<hr>";
?>
