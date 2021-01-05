<?php
	include_once("konek.php");

	$idpegawai = $_POST['id'];
	$jabatan = $_POST['jabatan'];
	$gaji = $_POST['gaji'];

	$perintah="UPDATE gaji_pegawai SET jabatan='$jabatan',gaji='$gaji' WHERE id_pegawai=$idpegawai";

	$hasil=mysqli_query($konek,$perintah);

	if($hasil){
		header('Location:indexgajipegawai.php');
	}else{
		echo "Data Gagal di Edit";
	}
?>