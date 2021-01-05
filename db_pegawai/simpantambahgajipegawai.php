<?php
	include_once("konek.php");

	$idpegawai = $_POST['id'];
	$jabatan = $_POST['jabatan'];
	$gaji = $_POST['gaji'];

	$perintah="INSERT INTO gaji_pegawai(id_pegawai, jabatan, gaji) VALUES ('$idpegawai','$jabatan','$gaji')";

	$hasil=mysqli_query($konek,$perintah);

	if($hasil){
		header('Location:indexgajipegawai.php');
	}else{
		echo "Data Gagal di Tambah";
	}

?>