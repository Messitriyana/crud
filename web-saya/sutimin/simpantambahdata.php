<?php
	include_once("konek.php");

	$Idpembeli = $_POST['Id'];
	$nama = $_POST['nama'];
	$jenis = $_POST['jenis'];
	$harga= $_POST['harga'];
	
	$perintah="INSERT INTO tabel_obat (Id_pembeli,nama,jenis,harga) VALUES ('$Idpembeli','$nama','$jenis','$harga')";

	$hasil=mysqli_query($konek,$perintah);

	if($hasil){
		header('Location:indexpembeli.php');
	}else{
		echo "Data Gagal di Tambah";
	}

?>