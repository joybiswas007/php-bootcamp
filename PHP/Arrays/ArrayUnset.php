<?php

$arr = ["first" => 1, 2, 3, 4, "last" => 5];
print_r($arr) . PHP_EOL;

unset($arr[2]);

print_r($arr);

$arr[] = 6;

print_r($arr) . PHP_EOL;

$arr1 = [1,2,3,4,5,6,7,8,9,10];
print_r($arr1);

unset($arr1[9]);

print_r($arr1);

$arr1[] = 11;

print_r($arr1);