<?php
$time = time();

echo $time . PHP_EOL . PHP_EOL;

if (!empty($_SERVER['HTTP_CLIENT_IP'])){
	$ip_address = $_SERVER['HTTP_CLIENT_IP'];
} else if (!empty($_SERVER['HTTP_X_FORWARDER_FOR'])) {
	$ip_address = $_SERVER['HTTP_X_FORWARDER_FOR'];
} else {
	$ip_address = $_SERVER['REMOTE_ADDR'];
}
	echo $ip_address;
	echo PHP_EOL;

	echo "User Agent: " . $_SERVER['HTTP_USER_AGENT'];
	echo PHP_EOL;

	// header("Location: https://pornhub.com/");

	$email = "Joybiswas040701@gmail.com";
	if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
		echo "Your mail: $email is Valid." . PHP_EOL;
	} else {
		echo "$email is Invalid" . PHP_EOL;
	}

$number = 25;

echo ($number >= 30) ? "$number is greater than 30" : "$number is less than 30";

$arr = [];


$arr[1] = "Hello";


$arr[2] = "Hi";

var_dump($arr);

for ($i = ord('A'); $i < ord('Z'); $i++) {
	echo chr($i) . "\t" . PHP_EOL;
}
function password_generate($char) {
	$data = "abcdefghijklmnopqrstuvwxyz1234567890ABCDEFGHIJKLMNOPQRSTUVWXY~`!@#$%^&*()[]{}=/\|";
	return substr(str_shuffle($data), 0, $char);
}

echo password_generate(40);

$string = "This is a test";

echo str_shuffle($string) . PHP_EOL;


$value = $_SERVER[''];

print($value);