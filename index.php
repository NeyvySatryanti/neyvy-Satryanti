<?php 
$beban = 70;
if ($beban<=30) {
	$hasil1 = $beban *150;
	$hasil2 = 0;
	$hasil3 = 0;
	$total = $hasil1+$hasil2+$hasil3;
	echo "$hasil1<br>";
	echo "$hasil2<br>";
	echo "$hasil3<br>";
	echo "Total Bayar RP. $total";
}
elseif($beban>30 and $beban<=60){
	$hasil1 = (($beban/$beban)*30) *150;
	$hasil2 = ($beban -30)*170;
	$hasil3 = 0;
	$total = $hasil1+$hasil2+$hasil3;
	echo "$hasil1<br>";
	echo "$hasil2<br>";
	echo "$hasil3<br>";
	echo "Total Bayar RP. $total";
}
elseif($beban>60){
	$hasil1 = (($beban/$beban)*30) *150;
	$hasil2 = (($beban/$beban)*30) *170;
	$hasil3 = ($beban -60)*250;
	$total = $hasil1+$hasil2+$hasil3;
	echo "$hasil1<br>";
	echo "$hasil2<br>";
	echo "$hasil3<br>";
	echo "Total Bayar RP. $total";
}
 ?>
