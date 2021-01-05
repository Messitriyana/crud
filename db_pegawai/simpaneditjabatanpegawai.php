<?php
	include_once("konek.php");

	$idjabatan = $_POST['id'];
	$jabatan = $_POST['jabatan'];

	$perintah="UPDATE jabatan_pegawai SET jabatan='$jabatan' WHERE id_jabatan=$idjabatan";

	$hasil=mysqli_query($konek,$perintah);

	if($hasil){
		header('Location:indexjabatanpegawai.php');
	}else{
		echo "Data Gagal di Edit";
	}
?>