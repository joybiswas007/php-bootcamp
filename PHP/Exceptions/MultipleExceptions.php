<?php

function custom_exception_handler($exception) {
	echo "Caught Exception: " . $exception->getMessage();
}
function Divide($a, $b) {
try {
	if ( $b <= 0 ) {
		throw new Exception("values doesn't matche");
	} 
	$result = $a / $b;
	
} catch (Exception $e) {
	throw new Exception("Divide method has input param is less than zero" . $e->getMessage());
}
return $result;
}


set_exception_handler('custom_exception_handler');

Divide(1, 0);