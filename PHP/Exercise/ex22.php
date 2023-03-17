<?php

function add ($x, $y) {
	$result = $x + $y . PHP_EOL;
	return $result;
}

echo add(10, 20);

echo "Current PHP Version: " . `php --version` . PHP_EOL;