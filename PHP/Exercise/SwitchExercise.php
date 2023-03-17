<?php

$input_value = 10;
$result = $input_value % 2;
switch ($result) {
	case 1:
		echo "Odd Number" . PHP_EOL;
		break;
	
	case 0:
		echo "Even Number" . PHP_EOL;
		break;
}

$weekday = "Fri";
switch ($weekday) {
		case "Sat":
		echo "Saturday" . PHP_EOL;
		break;
		case "Sun":
		echo "Sunday" . PHP_EOL;
		break;
		case "Mon":
		echo "Monday" . PHP_EOL;
		break;
		case "Tue":
		echo "Tuesday" . PHP_EOL;
		break;
		case "Wed":
		echo "Wednesday" . PHP_EOL;
		break;
		case "Thu":
		echo "Thursday" . PHP_EOL;
		break;
		case "Fri":
		echo "Friday" . PHP_EOL;
		break;
		default:
		echo "None matched :(" . PHP_EOL;
		break;
}

$number = 10;
switch (true) {
	case $number >= 20:
	echo "The number is greater or equal to 10" . PHP_EOL;
	break;
	case $number == 10;
	echo "The number is equal to 10;" . PHP_EOL;
	break;
	default:
	echo "Invalid number!" . PHP_EOL;
}