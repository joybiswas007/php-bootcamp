<?php

$bytes = random_bytes(10);

echo bin2hex($bytes) . PHP_EOL;

$password = random_bytes(20);
$pass = bin2hex($password);
echo password_hash($pass, PASSWORD_DEFAULT) . PHP_EOL;


function divide($x, $y) {
	if ($y <= 0) {
		throw new Exception("Divide by Zero exception might occured!");
	}
	$result = $x / $y;
	return $result;
}

try {
	$result = divide(5, 0);
} catch (Exception $e) {
	echo "Caught Exception: " . $e->getMessage() . PHP_EOL;
}

echo "Hakuna Matata" . PHP_EOL;

function custom_exception_handler($exception) {
	echo "Caught Exception: " . $exception->getMessage() . PHP_EOL;
}
set_exception_handler("custom_exception_handler");

function div($a, $b) {
	if ($b <= 0) {
		throw new Exception("Divided by Zero exception occured");
	}
	$result = $a / $b;
	return $result;
}

div(1, 0);