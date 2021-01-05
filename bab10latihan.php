<?php
ob_start ();
$host = "localhost";//Host name
$username = "root";//Mysql username
$password = "";//Mysql password
$db_name = "mahasiswa";//Database name

mysql_connect ("$host", "$username", "$password") or die ("cannot connect");
mysql_select_db ("$db_name") or die ("cannot select DB");

$sql = "CREATE TABLE mhs(
nim varchar (10) NOT NULL,
nama varchar (30) NOT NULL,
tgllahir date,
alamat text,
PRIMARY KEY (nim)
);";

$result = mysql_query ($sql);
echo "membuat tabel sukses"; echo exit;

ob_end_flush ();
?>