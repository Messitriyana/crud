<?php
	include_once("konek.php");
	$idpenyewa=$_GET['id'];

	$perintah="DELETE from tabel_obat WHERE id_pembeli=$pembeli";

	$hasil=mysqli_query($konek,$perintah);

	if($hasil){
		header('Location:indexpembeli.php');
	}else{
		echo "Data Gagal di Hapus";
	}
?>