<?php
function custom_exception_handler($exception) {
	echo "Uncaught Error: " . $exception->getMessage() . PHP_EOL;
}

set_exception_handler('custom_exception_handler');

function hello($a, $b) {
	try{
		throw new Exception("Divide by zero might happen.");
		$result = $a / $b;
		return $result;
	} catch (Exception $e) {
		$e->getMessage();
	} finally {
		echo "Clean exit using Finally" . PHP_EOL;
	}
}

hello(1, 0);

global $name;
$name = "hello";

function test(){
	// $name = "ello";
	echo $GLOBALS['name'] . PHP_EOL;
}
test();
