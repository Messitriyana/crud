<?
require_once "clstabelharga.php";
$mharga = new harga ();
$mod = $_REQUEST ['mod'];
switch ($mod)
{
	default:
	$mharga->showHarga ();
	break;
}
?>