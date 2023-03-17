<?php

/*1) Define Indexed Array and Associative Array.
2) Use Employee Details as Array
3) Display using foreach*/

$arr = [1,2,3,4,5,6,7,8,9,10];

$arr1 = ["emp_id" => 101, "emp_name" => "John Smith", "emp_position" => "DevOps"];

$arr3 = []; //Empty Array
foreach($arr1 as $key => $value) {
	$arr3[$key] = $value;
}

var_dump($arr3);

$arr[15] = 11;

var_dump($arr) . PHP_EOL;