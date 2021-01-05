<?php
	include_once("konek.php");

	$idjabatan = $_POST['id'];
	$jabatan = $_POST['jabatan'];

	$perintah="INSERT INTO jabatan_pegawai(id_jabatan, jabatan) VALUES ('$idjabatan','$jabatan')";

	$hasil=mysqli_query($konek,$perintah);

	if($hasil){
		header('Location:indexjabatanpegawai.php');
	}else{
		echo "Data Gagal di Tambah";
	}

?>