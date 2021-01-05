<?php

echo "Fungsi untuk mengambil tanggal saat ini dari sistem";
echo "<br>";
echo "Tanggal sistem saat ini adalah:";
echo "<br>";
session_start();
$_SESSION ['tanggal'] = date ('d/m/Y');
echo $_SESSION ['tanggal'];
?>