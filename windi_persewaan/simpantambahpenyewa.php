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
	
	$perintah="INSERT INTO data_windi(id_penyewa,nama,gender,alamat,nama_barang,jenis_barang,jaminan,no_hp,pinjam) VALUES ('$idpenyewa','$nama','$gender','$alamat','$namabarang','$jenisbarang','$jaminan','$nohp','$pinjam')";

	$hasil=mysqli_query($konek,$perintah);

	if($hasil){
		header('Location:indexpenyewa.php');
	}else{
		echo "Data Gagal di Tambah";
	}

?>