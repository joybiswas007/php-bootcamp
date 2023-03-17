<?php

$arr = ["hdb" => "HDBits", "lztr" => "LzTr", "red" => "Redacted"];

$arr1 = [];

foreach ($arr as $key => $value) {
	$arr1[$key] = $value;
}

print_r($arr1) . PHP_EOL;


function sub($x, $y) {
	return $x - $y;
}

$subFunction = "sub";

echo "Sub: " . $subFunction(20, 10) . PHP_EOL;

$str = "This is a test!";

$anonymous = function () use ($str) {
	echo $str;
};

echo $anonymous() . PHP_EOL;

//Variable pass by refference

$result = 0;

function add($a, $b, &$result = null) {
	$result = $a + $b;
}

add(1, 2, $result);

echo $result . PHP_EOL;

$sub = 0;
function subtract($x, $y, &$sub = null) {
	$sub = $x - $y;
}

subtract(5, 2, $sub);

echo $sub . PHP_EOL;