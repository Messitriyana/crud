<?php
	include_once("konek.php");

	$idpegawai = $_POST['id'];
	$nama = $_POST['nama'];
	$jabatan = $_POST['jabatan'];
	$alamat = $_POST['alamat'];

	$perintah="INSERT INTO data_pegawai(id_pegawai, nama, jabatan, alamat) VALUES ('$idpegawai','$nama','$jabatan','$alamat')";

	$hasil=mysqli_query($konek,$perintah);

	if($hasil){
		header('Location:indexpegawai.php');
	}else{
		echo "Data Gagal di Tambah";
	}

?>