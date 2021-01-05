<?php
$penjualan=1000000;
if($penjualan>1000000){
	echo "ANDA MENDAPATKAN DISKON 15%";
}else if ($penjualan>=750000 && $penjualan<=1000000){
	echo "ANDA MENDAPATKAN DISKON 10%";
}else{
	echo "ANDA MENDAPATKAN DISKON 7%";
}
?>