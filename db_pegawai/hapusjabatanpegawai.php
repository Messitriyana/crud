<?php
	include_once("konek.php");
	$idjabatan=$_GET['id'];

	$perintah="DELETE from jabatan_pegawai WHERE id_jabatan=$idjabatan";

	$hasil=mysqli_query($konek,$perintah);

	if($hasil){
		header('Location:indexjabatanpegawai.php');
	}else{
		echo "Data Gagal di Hapus";
	}
?>