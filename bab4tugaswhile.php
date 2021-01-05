<?php
$genap=" ";
$ganjil=" ";
$i=1;
while($i<=10){
	$i%2==0?
	$genap .=$i." "
	:
	$ganjil .=$i ." ";
	$i++;
}
echo "bilangan genap adalah $genap<br/>";
echo "bilangan ganjil adalah $ganjil<br/>";
?>

