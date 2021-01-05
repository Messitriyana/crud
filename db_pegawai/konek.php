<?php

$konek =mysqli_connect ("localhost","root","","apotek");

if(!$konek){
	echo "Gagal Terhubung";
	die();
}