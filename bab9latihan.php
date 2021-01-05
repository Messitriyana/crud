<?php
class mobil
{
	var $merk = " TOYOTA ";
	var $warna = " Merah ";
	var $harga = " 25000000 ";

	function gantiWarna ( $warnaBaru )
	{
	   $this->warna = $warnaBaru;
	}

	function tampilWarna ()
	{
	   echo "Warna mobilnya:".$this->warna;
	}
}
$obja = new mobil ();
$objb = new mobil ();
echo "<b>Mobil pertama</b><br>";
$obja->tampilWarna ();
echo "<br> Mobil pertama ganti warna <br>";
$obja->gantiWarna ("Merah");
$obja->tampilwarna ();
//
echo "<br><b>Mobil kedua</b><br>";
$objb->gantiWarna ("Hijau");
$objb->tampilWarna ();
?>