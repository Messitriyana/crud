<?php

$konek =mysqli_connect ("localhost","root","","apotik_indah");

if(!$konek){
	echo "Gagal Terhubung";
	die();
}