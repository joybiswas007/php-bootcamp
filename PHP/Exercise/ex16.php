<?php

function custom_error_handler($exception) {
	echo "Caught Exceptions: " . $exception->getMessage();
}

function Error($a, $b) : int {
	if ($b <= 0) {
		throw new Exception("Error Occured");
	}
	$result = $a / $b;
	return $result;
}

set_exception_handler('custom_error_handler');
Error(1, 0);