<?php
declare(strict_types=1);

function Calculate(int $a, int $b, String $operation = "all") {
	$operation = strtolower($operation);
	switch ($operation) {
		case 'add':
			$result = $a + $b;
			echo "Add: " . $result . PHP_EOL;
			break;
		case 'sub':
			$result = $a - $b;
			echo "Subtraction: " . $result . PHP_EOL;
			break;
		case 'multi':
			 $result = $a * $b;
			 echo "Multiply: " . $result . PHP_EOL;
			break;
		case 'div':
			$result = $a / $b;
			echo "Divided: " . $result . PHP_EOL;
			break;
		default:
			$result = $a + $b;
			echo "Add: " . $result . PHP_EOL;
			$result = $a - $b;
			echo "Subtraction: " . $result . PHP_EOL;
			$result = $a * $b;
			echo "Multiply: " . $result . PHP_EOL;
			$result = $a / $b;
			echo "Divided: " . $result . PHP_EOL;
			break;
	}

}

Calculate(20, 10);

