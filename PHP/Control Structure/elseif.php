<?php

$input_number = 21;
$result = $input_number % 2;

if ($result) {
	echo "Odd Number" . PHP_EOL;
} else if (!$result) {
	echo "Even Number" . PHP_EOL;
}

if ($input_number > 30) {
	echo "Number is greater than 30" . PHP_EOL;
} else if ($input_number == 21) {
	echo "Number is equal to 21" . PHP_EOL;
} else {
	echo "Number is less than 30" . PHP_EOL;
}