<?php
$file = "config.ini";
$arr1 = parse_ini_file($file);

print_r($arr1) . PHP_EOL;

$file = file('pwds.csv');
$filename = 'pwds.csv';
// foreach ($file as $key => $value){
// $data[$key] = str_getcsv($value);
// }
//  print_r($data);

$arr3 = array_map('str_getcsv', file($filename));
var_dump($arr3);
