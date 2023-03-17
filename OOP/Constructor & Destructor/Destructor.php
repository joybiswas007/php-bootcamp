<?php

class Destructor{
	function __construct() {
		echo "Hello, from Construct class" . PHP_EOL;
	}

	function __destruct() {
		echo "Hello, from Desctruct class" . PHP_EOL;
	}
}

$des = new Destructor();