<!DOCTYPE html>
<html>
<head>
   <title></title>
</head>
<body>
<h2>Data Mahasiswa</h2>
<form method = "POST" action = "8.php">
Nim = <input type = "text" name="Nim"><br><br>
Nama = <input type = "text" name="Nama"><br><br>
<input type = "submit" name= "submit" class="tombol" value="input">
</form>
</body>
</html>

<?php
echo "<br>";
echo "<b>Data Mahasiswa </b><br>";
if (isset ($_POST['submit'])){
	$Nim = $_POST['Nim'];
	$Nama = $_POST['Nama'];
	echo "Nim = $Nim <br>";
	echo "Nama = $Nama <br><br>";
}

class mahasiswa{
	var $nim = "201865018";
	var $nama = "Messi Triyana";

	function tampilnim(){
	    echo "Nim = ".$this->nim;
	}

	function tampilnama (){
	echo "Nama = ".$this->nama;
	}
}

$obja = new mahasiswa ();
$obja->tampilnim ();
echo "<br>";
$obja->tampilnama();


?>