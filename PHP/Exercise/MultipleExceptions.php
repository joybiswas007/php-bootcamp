<?php

function custom_exception_handler($exception) {
	echo "Caught Exception: " . $exception->getMessage() . PHP_EOL;
}

set_exception_handler('custom_exception_handler');

function divide($x, $y) {
	try{
		if ($y <= 0) {
			throw new Exception("Divide by Zero exception occured.");	
		}
		$result = $x / $y;

	} catch(Exception $e) {
		echo "Divide input parameter value is less than zero. " . $e->getMessage(). PHP_EOL;
	}
	return $result;
}

divide(1, 0);