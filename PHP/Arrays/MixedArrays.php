<?php
$arr = [];
var_dump($arr) . PHP_EOL;
$arr[0] = "CMUS";
$arr[3] = 8.2;
$arr[5] = 9;
$arr[10] = "Hello";

var_dump($arr) . PHP_EOL;

$arr[1] = "PHP";
$arr[] = 10;

var_dump($arr) . PHP_EOL;

foreach ($arr as $value) {
	echo $value . PHP_EOL;

}

 if (empty($arr[6])) {
 	echo "Empty" . PHP_EOL;
 }