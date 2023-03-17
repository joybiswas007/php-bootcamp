<?php

function custom_exception_handler($exception) {
	echo "Caught Exception: " . $exception->getMessage() . PHP_EOL;
}

set_exception_handler('custom_exception_handler');

function checkInteger($a, $b) : int {
	try{
		throw new Exception("You can only pass integer as return value.");
		$result = $a + $b;
		return $result;
	}catch(Exception $e) {
		echo "Value is NOT integer. " . $e->getMessage() . PHP_EOL;
	}
}

echo "Result: " . checkInteger("a", 2) . PHP_EOL;
