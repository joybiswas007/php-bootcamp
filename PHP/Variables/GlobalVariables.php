<?php
global $message;

$message = "This is a Global Variable";

function print_message()
{
	global $message;
	$message = "We can change global variables value in function.";
	echo $message;
}
print_message();

echo $message;