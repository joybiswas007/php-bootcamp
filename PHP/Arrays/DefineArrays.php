<?php

$arr = [1, 2, 3];

var_dump($arr) . PHP_EOL;

print_r($arr) . PHP_EOL;

echo $arr[0] . PHP_EOL;
echo $arr[1] . PHP_EOL;
echo $arr[2] . PHP_EOL;

echo "Array Length: " . count($arr) . PHP_EOL;

for($count = 0; $count < count($arr); $count++) {
	echo $arr[$count] . PHP_EOL;
	echo "$arr[$count]" . PHP_EOL;
}

const ARRAY_ELEMENT = 1;
echo $arr[ARRAY_ELEMENT] . PHP_EOL;

var_dump($arr);

$arr[0] = 2;
$arr[1] = "Hello";
$arr[2] = true;

var_dump($arr) . PHP_EOL;

