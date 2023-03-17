<?php
$arr = ["SQRT", "MK", "F4TS0", "N0M4D", "Coffee"];
print_r($arr) . PHP_EOL;

$arr1 = $arr;
print_r ($arr1) . PHP_EOL;

foreach ($arr as $value) {
	$arr2[] = $value;
}

print_r($arr2) . PHP_EOL;


foreach ($arr2 as $key => $value) {
	$arr3[$key] = $value;
}

print_r($arr3);

$list = "SQRT, MK, F4TS0, N0M4D, Coffee";
echo $list . PHP_EOL;
$arrList = explode(",", $list);
print_r($arrList);

$data = implode(",", $arrList);
echo $data . PHP_EOL;

$arrList = explode(",", $list, 3);
print_r($arrList);