<form method="get">
	<select name="gender">
		<option value="laki">Laki</option>
		<option value="perempuan">Perempuan</option>
		<option value="selain">Selain</option>
	</select>
	<input type="submit" value="submit">
</form>

<?php
$gender = $_GET['gender'];

switch ($gender) {

	case "laki":
		echo "Laki";
		break;

	case "perempuan":
		echo "Perempuan";
		break;

	default:
		echo "transgender";
}
?>
