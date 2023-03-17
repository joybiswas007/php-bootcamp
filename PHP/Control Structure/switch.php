<?php
$input_number = 10;

$result = $input_number % 2;

if ($result) {
	echo "Odd Number" . PHP_EOL;
} else if (!$result) {
	echo "Even Number" . PHP_EOL;
}

switch ($result) {
	case 1:
		echo 'Odd Number' . PHP_EOL;
		break;
	case 0:
		echo 'Even Number' . PHP_EOL;
		break;
	default:
		echo 'Invalid Input' . PHP_EOL;
}

if ($input_number > 30) {
	echo "Number is greater than 30" . PHP_EOL;
} else if ($input_number == 21) {
	echo "Number is equal to 21" . PHP_EOL;
} else {
	echo "Number is less than 30" . PHP_EOL;
}

switch (true) {
	case $input_number > 20:
		echo "Number is  greater than 30" . PHP_EOL;
		break;
	case $input_number == 10:
		echo "Number is equal to 10" . PHP_EOL;
		break;
	default:
		echo "Number is less than 10" . PHP_EOL;
		break;
}

$weekday = "Fri";

switch ($weekday) {
	case "Fri":
		echo "Friday" . PHP_EOL;
		break;
	case "Mon":
		echo "Monday" . PHP_EOL;
		break;
	default:
		echo "Other day of week" . PHP_EOL;
}