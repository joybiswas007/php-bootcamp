<?php

$file = 'my_earnings.csv';

$arr = file($file);

foreach ($arr as $key => $value) {
$data[$key] = str_getcsv($value);
}
var_dump($data);
