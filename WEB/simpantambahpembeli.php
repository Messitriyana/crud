<?php
	include_once("konek.php");

	$idpembeli = $_POST['id'];
	$nama = $_POST['nama'];
	$jenis = $_POST['jenis'];
	$harga= $_POST['harga'];
	
	$perintah="INSERT INTO Obat(id_pembeli,nama,jenis,harga) VALUES ('$idpembeli','$nama','$jenis','$harga')";

	$hasil=mysqli_query($konek,$perintah);

	if($hasil){
		header('Location:indexpembeli.php');
	}else{
		echo "Data Gagal di Tambah";
	}

?>