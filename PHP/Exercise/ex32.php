<?php
function Calculator($a, $b, $operation = "all"){
	switch ($operation) {
		case 'add':
			$result = $a + $b;
			echo "Add: " . $result . PHP_EOL;
			break;
			case 'sub':
			$result = $a - $b;
			echo "Sub: " . $result . PHP_EOL;
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
			echo "Sub: " . $result . PHP_EOL;
			$result = $a * $b;
			echo "Multiply: " . $result . PHP_EOL;
			$result = $a / $b;
			echo "Divided: " . $result . PHP_EOL;
			break;
	}
}

Calculator(10, 5, 'add') . PHP_EOL;