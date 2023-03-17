<?php
$arr = ["Sat", "Sun", "Mon", "Tue", "Wed", "Thu", "Fri"];
$count = 0;
foreach ($arr as $key => $value) {
	echo "[$count] => [$value] => $arr[$count]" . PHP_EOL;
	$count++;
}

$arr = ["Sat", 1, "Mon", true, "Wed", 8.2, "Fri"];
$count = 0;
foreach($arr as $value){
	echo "[$count] => $value => $arr[$count]" . PHP_EOL;
	$count++;
}

$value = ["Jan", "Feb", 8.2, "Mar", 1, "Apr", true, "May"];
$count = 0;
foreach ($value as $arr) {
	echo "[$count] => $arr => $value[$count]" . PHP_EOL;
	$count++;
}

$arr = ["Jan", "Feb", 8.2, "Mar", 1, "Apr", true, "May"];
$count = 0;

foreach ($arr as $value) {
	echo "[$count] => $value => $arr[$count]" . PHP_EOL;
	$count++;

}