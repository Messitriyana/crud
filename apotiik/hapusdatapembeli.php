<?php
	include_once("konek.php");
	$Idpembeli=$_GET['id'];

	$perintah="DELETE from tb_obat WHERE Id_pembeli = $Idpembeli";

	$hasil=mysqli_query($konek,$perintah);

	if($hasil){
		header('Location:indexpembeli.php');
	}else{
		echo "Data Gagal di Hapus";
	}
?>