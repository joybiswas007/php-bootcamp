<?php

class Add{
	static $result;
	static function getResult($a, $b) {
		self::$result = $a + $b;
	}
}

Add::getResult(2, 4);

echo "Add: " . Add::$result . PHP_EOL;