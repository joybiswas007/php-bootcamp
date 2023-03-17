<?php

declare(strict_types=1);

class Data {
	static $result;

	static function Add(int $a, int $b) : int {
		return Self::$result = $a + $b;

	}
}

Data::Add(10, 5);
echo "Add: " . Data::$result . PHP_EOL;