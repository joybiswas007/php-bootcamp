<?php
function printEvenNumbers(int $i, int $j) {
	if ($i <= 0 || $j <= 0 || $i == $j) {
		throw new Exception("Wrong Input Params") . PHP_EOL;
	}
	for (; $i <= $j; $j++) {
		if ($i%2 == 0){
			echo "Even Numbers: $i" . PHP_EOL;
		}
	}
}

function exception_occured($exception) {
	echo "Caught Exception: " . $exception->getMessage();
}

set_exception_handler('exception_occured');
printEvenNumbers(1, 1);