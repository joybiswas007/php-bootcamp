<?php

$str = "SQRT, N0M4D, F4TS0, Trigg3r, Scofield, Master007, Coffee";

$arr = explode(",", $str);

foreach($arr as $key => $value) {
	$arr1[] = $value;
	print_r($arr1);
}


$arr3[] = $arr;

$arr3[] = "Jarvis";

print_r($arr3);