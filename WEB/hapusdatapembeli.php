<?php
	include_once("konek.php");
	$idpembeli=$_GET['id'];

	$perintah= "DELETE from Obat WHERE id_pembeli=$idpembeli";

	$hasil=mysqli_query($konek,$perintah);

	if($hasil){
		header('Location:indexpembeli.php');
	}else{
		echo "Data Gagal di Hapus";
	}
?>