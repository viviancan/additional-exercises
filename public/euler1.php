<?php 


	$number = 0;

	$finalArray = array( );


	do {
		if ($number % 3 == 0 || $number % 5 == 0){

			 // echo $number . PHP_EOL;

			 $finalArray[] = $number;
		}
			$number++;

	} while ($number < 1000);

	echo "Final total: " . array_sum($finalArray) . PHP_EOL;


 ?>