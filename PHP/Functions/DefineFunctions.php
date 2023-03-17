<?php

function printEvenNumbers ($limit) {
	for ($i = 1; $i <= $limit; $i++) {
		if ($i%2 < 1) {
			echo "Even Numbers: $i" . PHP_EOL;
		}
	}
}

printEvenNumbers(20);

function printOddNumbers ($limit) {
	for ($j = 0; $j <= $limit; $j++) {
		if ($j%2 == 1) {
			echo "Odd Numbers: $j" . PHP_EOL;
		}
	}
}

printOddNumbers(20);

function EvenNumbers ($limit) {
	for ($value = 0; $value <= 10; $value++) {
		if ($value%2 == 0) {
			echo "Even Numbers: $value" . PHP_EOL;
		}
	}
}

EvenNumbers(20);

function OddNumbers ($limit) {
	for ($index = 1; $index <= $limit; $index++) {
		if ($index%2 > 1 ) {
			echo "Odd Numbers: $index" . PHP_EOL;
		}
	}
}

OddNumbers(20);

function add ($a, $b) {
	return $a + $b;
} 

echo add(10, 20) . PHP_EOL;