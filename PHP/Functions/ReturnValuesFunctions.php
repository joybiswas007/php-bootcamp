<?php

function evenNumbers($limit): array {
	$returnArr = [];
	for ($i = 0; $i <= $limit; $i++) {
		if ($i%2==0) {
			echo "Even Numbers: $i" . PHP_EOL;
			$returnArr[] = $i;
		}
	}
	return $returnArr;
}

$evenNumbers = evenNumbers(20);

print_r($evenNumbers);