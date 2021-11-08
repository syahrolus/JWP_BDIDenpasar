<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>tes</title>
</head>
<body>

<form method="GET">
	<h3>luas persegi panjang</h3>
	<label>panjang</label>
	<br>
	<input type="number" name="panjang">
	<br>
	<label>lebar</label>
	<br>
	<input type="number" name="lebar">
	<br>
	<input type="submit" name="submit_pp" value="hitung">
</form>

<p> hasil :

<?php 

if (isset($_GET['submit_pp'])) {
	echo $_GET['panjang'] * $_GET['lebar'];
}

 ?>
</p>


<!-- ===================== -->

<form method="GET">
	<h3>luas segitiga</h3>
	<label>alas</label>
	<br>
	<input type="number" name="alas">
	<br>
	<label>tinggi</label>
	<br>
	<input type="number" name="tinggi">
	<br>
	<input type="submit" name="submit_s" value="hitung">
</form>

<p> hasil :

<?php 

if (isset($_GET['submit_s'])) {
	echo ($_GET['alas'] / 2 ) * $_GET['tinggi'];
}

 ?>
</p>

<!-- ===================== -->

<form method="GET">
	<h3>keliling lingkaran</h3>
	<label>jari-jari</label>
	<br>
	<input type="number" name="jari">
	<br>
	<input type="submit" name="submit_j" value="hitung">
</form>

<p> hasil :

<?php 

if (isset($_GET['submit_j'])) {
	echo 2*pi()*$_GET['jari'];
}

 ?>
</p>

<!-- ===================== -->

<form method="GET">
	<h3>nilai</h3>
	<label>nilai</label>
	<br>
	<input type="number" name="nilai">
	<br>
	<input type="submit" name="submit_nilai" value="hitung">
</form>

<p> hasil :

<?php 

if (isset($_GET['submit_nilai'])) {
	$nilai = $_GET['nilai'];
	$retVal = ($nilai <= 100 && $nilai >= 86) ? "A" : ( ($nilai <= 85 && $nilai >= 76) ? "B": ( ($nilai <= 75 && $nilai >= 51) ? "C": (($nilai <= 50 && $nilai >= 31)? "D":"E") ) ) ;
	echo $retVal;
}

 ?>
</p>

</body>
</html>