<?php

function custom_exception_handler($exception) {
	echo "Uncaught Error: " . $exception->getMessage() . PHP_EOL;
}
 
 set_exception_handler('custom_exception_handler');

function printEvenNumbers(int $i, int $j) {
	if($i <= 0 || $j <= 0 || $i == $j) {
		throw new Exception("Only integer values are accepted.");
	}
		for($i; $i <= $j; $i++){
			if($i%2 == 0) {
				echo "Even Numbers: " . $i . PHP_EOL;
			}
		}
	}

printEvenNumbers(2, 2);