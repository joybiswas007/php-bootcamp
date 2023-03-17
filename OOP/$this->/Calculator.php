<?php
class Calculator {
	public $a;
	public $b;
	public $operation= "all";
	function checkUserPermission($a, $b, $operation) {
		switch ($operation) {
			case "add":
			$result = $a + $b;
			echo "Addition: " . $result . PHP_EOL;
			break;
			case "sub":
			$result = $a - $b;
			echo "Subtraction: " . $result . PHP_EOL;
			break;
			case "multi":
			$result = $a * $b;
			echo "Multiply: " . $result . PHP_EOL;
			break;			
			case "div":
			$result = $a / $b;
			echo "Divide: " . $result . PHP_EOL;
			break;
			default:
			echo "Addition: " . $a + $b . PHP_EOL;
			echo "Subtraction: " . $a - $b . PHP_EOL;
			echo "Multiply: " . $a * $b . PHP_EOL;
			echo "Divide: " . $a / $b . PHP_EOL;
			break;

		}

	}
}

$op = new Calculator();
$op->checkUserPermission(10, 5, "add");