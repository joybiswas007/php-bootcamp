<?php

$condition1 = TRUE;
$condition2 = FALSE;

if ($condition1) {
	echo "Has Value" . PHP_EOL;
} else {
	echo "Empty" . PHP_EOL;
}

if ($condition2) {
	echo "Has Value" . PHP_EOL;
} else {
	echo "Empty" . PHP_EOL;
}

$name = null;

if (isset($name) && !is_null($name)) {
	echo "Not Null" . PHP_EOL;

} else {
	echo "Null" . PHP_EOL;
}