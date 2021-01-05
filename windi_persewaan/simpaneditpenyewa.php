<?php
	include_once("konek.php");

	$idpenyewa = $_POST['id'];
	$nama = $_POST['nama'];
	$gender = $_POST['gender'];
	$alamat= $_POST['alamat'];
	$namabarang= $_POST['nama_barang'];
	$jenisbarang= $_POST['jenis_barang'];
	$jaminan= $_POST['jaminan'];
	$nohp= $_POST['no_hp'];
	$pinjam= $_POST['pinjam'];

	$perintah="UPDATE data_windi SET nama ='$nama', gender='$gender', alamat='$alamat', nama_barang='$namabarang',jenis_barang='$jenisbarang', jaminan='$jaminan', no_hp='$nohp', pinjam='$pinjam' WHERE id_penyewa=$idpenyewa";

	$hasil=mysqli_query($konek,$perintah);

	if($hasil){
		header('Location:indexpenyewa.php');
	}else{
		echo "Data Gagal di Edit";
	}
?>