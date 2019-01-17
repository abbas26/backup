<?php
	//Multidimensional Arrays (For loop)
	echo "<h2>"."1. Ini adalah Skrip Multidimensional Arrays (For loop)"."</h2>";
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
	echo "<h4>"."PENJELASAN :"."</h4>";
	echo "==> Ini adalah penerapan dari Fungsi Pengulangan (For Loop) Multidimensional Arrays";
	echo "<br>";
	echo "==> Skrip diatas berisi data bertipe Array berupa Index Colom 0-3 dan masing-masing mempunyai Index Row 0-2. Dan diberikan fungsi pengulangan (for) untuk memanggil data yang diinginkan.";
	echo "<br>";
	echo "==> Skrip diatas menampilkan semua data Array yang ada di Variable $ Sayur. Untuk itu ada skrip untuk mengatur dan membatasi jumlah data yang keluar.";
	echo "<br>";
	echo "==> Salah satu contohnya adalah skrip" . "<b>" . " for ($ row = 0; $ row < 4; $ row++) " . "</b>" . "berarti dilakukan pengulangan yang dimulai dari baris pertama dengan Index 0.";
	echo "<br>";
	echo "==> Lalu dilakukan perbandingan 'apakah baris pertama tersebut bernilai kurang dari 4. Jika TRUE maka dilakukan fungsi selanjutnya yaitu penjumlahan 1 nilai namun setelah dilakukan kembali pemanggilan variable.";

		echo "<br>";
		echo "<hr>";

	//Two-dimensional Arrays
	echo "<h2>"."2. Ini adalah Skrip Multidimensional Arrays"."</h2>";
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
	echo "<h4>"."PENJELASAN :"."</h4>";
	echo "==> Ini adalah penerapan dari Two-dimensional Arrays";
	echo "<br>";
	echo "==> Skrip diatas sama halnya dengan skrip nomer 1, hanya saja berbeda dalam pemanggilannya.";
	echo "<br>";
	echo "==> Skrip nomer 1 menggunakan Fungsi pengulangan (for), sedangkan skrip ke-2 menggunakan pemanggilan berdasarkan letak Index Coloum dan Index Row data array";
	echo "<br>";
	echo "==> Jadi bisa dikatakan bawha ada array di dalam array";
	echo "<br>";
	echo "==> '$ sayur' adalah sebuah variabel dan didalamnya ada fungsi array berupa Index Coloum 0-3 dan Index Rows 0-2";
	echo "<br>";
	echo "==> Misal 'array('Wortel',50,18),' adalah Index Coloum 0 dan didalamnya ada data string 'Wortel' dengan index 0, int 50 dengan index 1, dan int 18 dengan index 2";

?>
