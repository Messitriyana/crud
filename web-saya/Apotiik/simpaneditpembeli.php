<?php
	include_once("konek.php");

	$Idpembeli = $_POST['Id'];
	$nama = $_POST['nama'];
	$jenis = $_POST['jenis'];
	$harga = $_POST['harga'];

	$perintah="UPDATE tabel_obat SET nama ='$nama', jenis='$jenis', harga='$harga' WHERE Id_pembeli=$Idpembeli";

	$hasil=mysqli_query($konek,$perintah);

	if($hasil){
		header('Location:indexpembeli.php');
	}else{
		echo "Data Gagal di Edit";
	}
?>