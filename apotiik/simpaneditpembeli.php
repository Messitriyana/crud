
<?php
	include_once("konek.php");

	$Id_pembeli = $_POST['Id'];
	$nama = $_POST['nama'];
	$jenis = $_POST['jenis'];
	$harga = $_POST['harga'];

	$perintah="UPDATE tb_obat SET nama ='$nama', jenis='$jenis', harga='$harga' WHERE Id_pembeli=" .$idpembeli;

	$hasil=mysqli_query($konek,$perintah);

	if($hasil){
		header('Location:indexpembeli.php');
	}else{
		echo "Data Gagal di Edit";
	}
?>