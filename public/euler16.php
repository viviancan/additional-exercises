<?php

$integer =  pow(2, 1000);
$integer = sprintf("%.0F", $integer);
$individual = (string) $integer; 
$sum = 0;

for($i = 0; $i < strlen($integer); $i++){
	$sum += $individual[$i];
}

echo $sum;




 ?>