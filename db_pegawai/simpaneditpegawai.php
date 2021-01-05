<?php
	include_once("konek.php");

	$idpegawai = $_POST['id'];
	$nama = $_POST['nama'];
	$jabatan = $_POST['jabatan'];
	$alamat = $_POST['alamat'];

	$perintah="UPDATE data_pegawai SET nama='$nama', jabatan='$jabatan', alamat='$alamat' WHERE id_pegawai=$idpegawai";

	$hasil=mysqli_query($konek,$perintah);

	if($hasil){
		header('Location:indexpegawai.php');
	}else{
		echo "Data Gagal di Edit";
	}
?>