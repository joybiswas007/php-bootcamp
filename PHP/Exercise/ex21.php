<?php

function custom_exception_handler($exception) {
	echo "Caught Exception: " . $exception->getMessage();
}

set_exception_handler('custom_exception_handler');

echo 1 / 0 . PHP_EOL;

function custom_error_handler($errno, $errstr) {
	echo $errstr;
}

set_error_handler('custom_error_handler');

echo 5/0;