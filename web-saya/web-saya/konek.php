<?php

$konek =mysqli_connect ("localhost","root","","apotek_indah");

if(!$konek){
	echo "Gagal Terhubung";
	die();
}