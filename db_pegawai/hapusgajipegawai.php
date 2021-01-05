<?php
	include_once("konek.php");
	$idpegawai=$_GET['id'];

	$perintah="DELETE from gaji_pegawai WHERE id_pegawai=$idpegawai";

	$hasil=mysqli_query($konek,$perintah);

	if($hasil){
		header('Location:indexgajipegawai.php');
	}else{
		echo "Data Gagal di Hapus";
	}
?>