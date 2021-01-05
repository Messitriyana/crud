<?php

$konek =mysqli_connect ("localhost","root","","apotiik");

if(!$konek){
	echo "Gagal Terhubung";
	die();
}