<?php
	include_once("konek.php");

	$idpembeli = $_POST['id'];
	$nama = $_POST['nama'];
	$jenis = $_POST['jenis'];
	$harga= $_POST['harga'];

	$perintah="UPDATE Obat SET nama ='$nama', jenis='$jenis', harga='$harga' WHERE id_penyewa=$idpenyewa";

	$hasil=mysqli_query($konek,$perintah);

	if($hasil){
		header('Location:indexpembeli.php');
	}else{
		echo "Data Gagal di Edit";
	}
?>