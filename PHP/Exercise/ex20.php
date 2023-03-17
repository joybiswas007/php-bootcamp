<?php

function Calculator($i, $j, String $operation = "all") {
	$operation = strtolower($operation);
	switch($operation) {
		case 'add':
		$result = $i + $j;
		echo "Add: " . $result . PHP_EOL;
		break;
		case 'sub':
		$result = $i - $j;
		echo "Subtract: " . $result . PHP_EOL;
		break;
		case 'multi':
		$result = $i * $j;
		echo "Multiply: " . $result . PHP_EOL;
		break;
		case 'div':
		$result = $i / $j;
		echo "Divided: " . $result . PHP_EOL;
		break;
		default:
		$result = $i + $j;
		echo "Add: " . $result . PHP_EOL;
		$result = $i - $j;
		echo "Subtract: " . $result . PHP_EOL;
		$result = $i * $j;
		echo "Multiply: " . $result . PHP_EOL;
		$result = $i / $j;
		echo "Divided: " . $result . PHP_EOL;
		break;
	} 
}

Calculator(10, 20, 'multi');