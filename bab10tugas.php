<?php
ob_start ();
    $server = "localhost";
    $username = "root";
    $pass = "";
    $db = "mahasiswa";

    $con = mysqli_connect ("$server","$username","$pass","$db") or die ("cannot connect");

       $sql="CREATE TABLE mata_kuliah (kode_mk varchar(6) NOT NULL, nama_mk varchar (50) NOT NULL, nilai int (3) NOT NULL, PRIMARY KEY (kode_mk));";

       $result = mysqli_query ($con, $sql);
       echo "Tabel mata kuliah berhasil dibuat"; echo exit;

ob_end_flush()

?>