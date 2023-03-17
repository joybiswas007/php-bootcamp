<?php

class Add{
	static $result;
	static function getResult($a, $b) : int {
		$result = $a + $b;
		return $result;
	}
}

Add::$result = Add::getResult(2, 4);
echo "Add: " . Add::$result . PHP_EOL;

echo "Add: " . Add::getResult(1, 2) . PHP_EOL;