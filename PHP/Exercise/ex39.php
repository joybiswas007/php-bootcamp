<?php
$time = getdate();

print_r($time);


echo date("d-m-Y") . PHP_EOL;

echo date_create("+1 days")->format("d-m-Y h:i:s") . PHP_EOL;

echo time() . PHP_EOL;

$password = password_hash("hakunabata", PASSWORD_DEFAULT);

echo $password . PHP_EOL;

$pwd = md5("Batata");

echo $pwd . PHP_EOL;

$pass = random_bytes(10);

echo bin2hex($pass) . PHP_EOL;


if ($pass < 10) {
	echo "short password!" . PHP_EOL;
} else {
	echo "Password accepted!" . PHP_EOL;
}

function custom_exception_handler($exception) {
	echo "Uncaught exception: " . $exception->getMessage() . PHP_EOL;
}

set_exception_handler('custom_exception_handler');

function div($a, $b) {
	if ($b <= 0) {
		throw new Exception("Divided by Zero exception might happen.");
	}
	$result = $a / $b;
	return $result;
}

div(1, 0);


function divided($x, $y) {
	try{
		if ($y <= 0) {
			throw new Exception("Divided by Zero");
		}
		$result = $x / $y;

	} catch (Exception $e) {
		echo "Caught Exception: " .  $e->getMessage();
		
	}
	return $result;
}

divided(5, 0);