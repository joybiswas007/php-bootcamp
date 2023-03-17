<?php
function custom_exceptions_handler($exceptions) {
	echo "Caught Exceptions: " . $exceptions->getMessage() . PHP_EOL;
}

function divide($a, $b) : int {
	if ($b <= 0) {
		throw new Exception("Exceptions Occured");
	}
	$result = $a / $b;
	return $result;
}

set_exception_handler('custom_exceptions_handler') . PHP_EOL;
// throw new Exception ("Exceptions Occured!") . PHP_EOL;

divide(1, 0);
