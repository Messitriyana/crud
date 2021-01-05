<?php
	include_once("konek.php");

	$username=$_POST['user'];
	$password=$_POST['pass'];

	$perintah="SELECT*FROM user WHERE username='$username' and password='$password'";

	$hasil=mysqli_query($konek,$perintah);

	if($hasil){
		header('Location:beranda.php');
	}else{
		echo "Gagal Login";
	}
?>