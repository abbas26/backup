<title>Cek Bilangan Prima</title>
<?php
$bilangan = $_GET['bil'];
$n = $bilangan; 
$status = "PRIMA";
for ($i = 2; $i <= $n-1; $i++)
{
if ($n % $i == 0)
{
$status = "TIDAK PRIMA";
break;
}
}
echo "Bilangan ".$n." adalah : ".$status;
echo "<br/> <a href='form.php'>Cek Lagi</a>";
?>
