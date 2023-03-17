<?php

$name = "Peter Griffin";
echo $name . PHP_EOL;
$name1 = "Stewart Griffin";

$name2 = $name . ' - ' . $name1;

echo $name2 . PHP_EOL;

echo "This is a \"Special\" text" . PHP_EOL;
echo "Creating \nnew Lines" . PHP_EOL;

echo "Pressing \t\tTab twice" . PHP_EOL;

echo 'Single quote does not print variables or anything $name' . PHP_EOL;

echo "The length of Name: " . strlen($name2) . PHP_EOL;