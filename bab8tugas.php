<?php
echo "Fungsi untuk mengambil tanggal saat ini dari PC";
echo "<br>";
print (cetaktebal("Tanggal saat ini adalah: "));
echo "<br>";
print (cetaktebal(date("d/m/Y")));
function cetaktebal ($parameter1)
{
	$strstring = "<br>";
	$strstring .= "$parameter1";
	$strstring .="<br>";
	Return ($strstring);
}
?>