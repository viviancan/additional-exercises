<?php


$number = 100;
$collatz = array( ); 

do{
	if($number % 2 == 0){
		$number = ($number/2);
		array_push($collatz, $number);
		echo $number . PHP_EOL;

	} else {
		$number = (3 * $number )+1;
		array_push($collatz, $number); 
		echo $number . PHP_EOL;

	}
} while ($number != 1)

// print_r($collatz)



// for ($i = 0; $i <= 13; $i++){
// 	$collatz[$i] = array( );
// 	do{
// 		if($i % 2 == 0){
// 			$number = ($i/2);
// 			array_push($collatz[$i], $number);
// 		} else {
// 			$number = (3 * $i )+1; 
// 			array_push($collatz[$i], $number);
// 		}
// 	} while ($number != 1);	
// 		echo $collatz[$i];
// }








?>