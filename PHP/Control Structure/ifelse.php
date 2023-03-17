<?php
$condition = TRUE;
$condition2 = FALSE;

if ($condition) {
	echo "This Condition is True." . PHP_EOL;
} else {
	echo "This Condition is False." . PHP_EOL;
}

if ($condition2) {
	echo "This is True." . PHP_EOL;
} else {
	echo "This is False." . PHP_EOL;
}

$name = "Peter";

if ($name === "Peter") {
	echo "Name is: " . $name . PHP_EOL;
} else {
	echo "Name is NOT: " . $name . PHP_EOL;
}

$value = null;
if (isset($name) && !is_null($value)) {
	echo "Value is set and NOT Null." . PHP_EOL;
} else {
	echo "Value is NOT set and is Null." . PHP_EOL;
}