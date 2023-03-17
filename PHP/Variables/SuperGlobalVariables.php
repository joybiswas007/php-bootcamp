<?php
echo "Using Super Global Variables" . PHP_EOL;
global $message;
$message = "Welcome to PHP!";
echo $GLOBALS['message'];

echo "Using another Super Global Variables" . PHP_EOL;

echo "File Name: " . $_SERVER['PHP_SELF'] . PHP_EOL;

echo "Accessing Global Variables using Super Global Variables" . PHP_EOL;
function show_message()
{
	echo $GLOBALS['message'];
}

show_message();