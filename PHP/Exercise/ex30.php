<?php

function printEvenNumbers(int $limit, $skipNumber = 4) {
	for ($i = 0; $i <= $limit; $i++) {
		if ($i == $skipNumber) {
			continue;
		}
		if ($i%2 == 0) {
			echo "Even Numbers: " . $i . PHP_EOL;
	}
}
}

printEvenNumbers(10);


function add ($x, $y) {
	return $x + $y;
}

$addFunction = "add";

echo "Result: " . $addFunction(1,2) . PHP_EOL;


function sub($a, $b) {
	return $a - $b;
}

$subFunction = "sub";

echo "Result: " . $subFunction(30, 20) . PHP_EOL;

//Anonymous Functions
//functions without names are closuers

$func = function ($a, $b) {
	return $a + $b;
};

echo $func(1, 3) . PHP_EOL;

$string = "This is a test string";

$printString = function () use($string) {
	echo $string . PHP_EOL;
};

$printString();