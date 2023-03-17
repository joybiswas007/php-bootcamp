<?php

function divide($a, $b) : int {
	if ($b <= 0) {
		throw new Exception("Exceptions Occured");
	}
	$result = $a / $b;
	return $result;
}

try {
	$result = divide(1, 0) . PHP_EOL;
} catch (Exception $e) {
	echo "Caught Exceptions: " . $e->getMessage() . PHP_EOL;
}