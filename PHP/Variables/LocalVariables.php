<?php
$message = "Welcome to PHP";

function print_message()
{
	$message = "Hello";
	echo $message;
}

print_message() . PHP_EOL;
echo $message;

function hello()
{
	echo $message;
}

hello();