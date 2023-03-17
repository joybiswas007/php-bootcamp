<?php

$value = "String got some value.";
echo strlen($value) . PHP_EOL;

$name = null;

if (!empty($name)) {
	echo "Hello " . $name . PHP_EOL;
} else {
	echo $name . "- is empty" . PHP_EOL;
}


if (strlen($name) > 0) {
	echo "Hello " . $name . PHP_EOL;
} else {
	echo $name . "- is empty" . PHP_EOL;
}


echo strlen($name) . PHP_EOL;