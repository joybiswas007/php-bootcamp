<?php
function printEvenNumbers($limit) {
	for($index = 0; $index <= $limit; $index++) {
		if ($index%2 == 0) {
			echo "Even Numbers: " . $index . PHP_EOL;
		}
	}
}

printEvenNumbers(20);

function printOddNumbers(int $limit) {
	for ($i = 1; $i <= $limit; $i++) {
		if ($i%2 == 1) {
			echo "Odd Numbers: " . $i . PHP_EOL;
		}
	}
}

printOddNumbers(20);

function Odd(int $limit, $skipNumber) {
	for($index = 0; $index <= $limit; $index++) {
		if($index == $skipNumber) {
			continue;
		}
		if ($index%2 > 0) {
			echo "Odd Numbers: " . $index . PHP_EOL;
		}
	}
}

Odd(20, 3);

function Number($num) {
	for($i = 0; $i <= $num; $i++) {
		if ($i == 10){
			break;
		}
		if ($i%2 == 0) {
			echo "Even Numbers: " . $i . PHP_EOL;
		}
	}

}

Number(30);


function returnEven($limit): array {
	$returnArr = [];
	
	for ($i = 0; $i <= $limit; $i++) {
		if ($i%2 == 0) {
			$returnArr[] = $i;
		}
	}
	return $returnArr;
}

$return = returnEven(20);

print_r($return);