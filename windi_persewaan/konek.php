<?php

$konek =mysqli_connect ("localhost","root","","windi_persewaan");

if(!$konek){
	echo "Gagal Terhubung";
	die();
}