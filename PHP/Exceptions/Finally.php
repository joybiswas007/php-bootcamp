<?php

function custom_error_handler($exception) {
	echo "Caught Exceptions: " . $exception->getMessage();
}
 set_exception_handler('custom_error_handler');

 try {
 	throw new Exception("Error!");
 } finally {
 	echo "This gets executed first";
 }