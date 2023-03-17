<?php
//String to Arrays

$arr = "SQRT, MK, F4TS0, N0M4D, Coffee";
echo $arr . PHP_EOL;

$arrayList = explode(",", $arr);
print_r($arrayList);

//Arrays to String

$list = implode(",", $arrayList);
echo $list . PHP_EOL;

//Limited no of Arrays

$arrayList = explode(",", $arr, 3);
print_r($arrayList);