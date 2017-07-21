<?php 

	$finalArray = array( );

	$a = 0;
	$b = 1;

	$finalArray[] = $a;
	$finalArray[] = $b;

	$sumArray = array( );

	do {

		$c = $b + $a;

		$finalArray[] = $c;

		$a = $c + $b;

		$finalArray[] = $a;

		$b = $a + $c;

		$finalArray[] = $b;

	} while ($b <= 4000000 && $c <= 4000000 && $a <= 4000000);

	$length = count($finalArray);

	for($i=0; $i < $length; $i++){

		if ($finalArray[$i] % 2 == 0) {

			$sumArray[] = $finalArray[$i];
		}
	} 
	print_r(array_sum($sumArray) . PHP_EOL);






?>