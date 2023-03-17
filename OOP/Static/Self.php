<?php

class Calculate {

	static function Calculate($a, $b, $operation = "all") {
		switch($operation) {
			case "add":
			$result = $a + $b;
			echo "Add: " . $result . PHP_EOL;
			break;
			case "sub":
			$result = $a - $b;
			echo "Sub: " . $result . PHP_EOL;
			break;
			case "div";
			$result = $a / $b;
			echo "Divided: " . $result . PHP_EOL;
			break;
			case "multi":
			$result = $a * $b;
			echo "Multiply: " . $result . PHP_EOL;
			break;
			default:
			echo "Add: " . $result = $a + $b . PHP_EOL;
			echo "Sub: " . $result = $a - $b . PHP_EOL;
			echo "Divided: " . $result = $a / $b . PHP_EOL;
			echo "Multiply: " . $result = $a * $b . PHP_EOL;
			break;
		}
	}
}

Calculate::Calculate(10, 5, "");