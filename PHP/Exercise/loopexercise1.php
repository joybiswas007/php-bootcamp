<?php
$name = "Peter";

if ($name === "Peter") {
    echo "Value accepted: " . $name . PHP_EOL;
}

$condition1 = TRUE;
$condition2 = FALSE;

if ($condition1) {
    echo "Condition is True." . PHP_EOL;
} else {
    echo "Condition is False." . PHP_EOL;
}

if ($condition2) {
    echo "Condition is True." . PHP_EOL;
} else {
    echo "Condition is False." . PHP_EOL;
}

$value = 21;

$input = $value % 2;

if ($input) {
    echo "Odd Number" . PHP_EOL;
} else if (!$input) {
    echo "Even Number" . PHP_EOL;
}

