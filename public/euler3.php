<?php
$palindrome = 0;

for ($i = 100; $i <= 999; $i++) {
	for ($j = 100; $j <= 999; $j++) {
		$x = $i * $j;
		if ($x > $palindrome && $x == strrev($x)) {
			$palindrome = $x;
		}
	}
}

echo $palindrome;