<?php
	include_once("konek.php");
	$idpegawai=$_GET['id'];

	$perintah="DELETE from data_pegawai WHERE id_pegawai=$idpegawai";

	$hasil=mysqli_query($konek,$perintah);

	if($hasil){
		header('Location:indexpegawai.php');
	}else{
		echo "Data Gagal di Hapus";
	}
?>