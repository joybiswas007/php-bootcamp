<?php

function caught($a, $b) {
	if ($b <= 0) {
		throw new Exception("Exceptions Occured");
	}
	$result = $a / $b;
	return $result;
}

try {
	$result = caught(1, 0);
} catch (Exception $e) {
 	echo "Caught Exception: " . $e->getMessage() . PHP_EOL;
}