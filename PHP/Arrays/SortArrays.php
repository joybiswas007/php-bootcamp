<?php

// sort() & rsort()
//Indexed Arrays

$arr = [5,4,2,3,1];
print_r($arr) . PHP_EOL;
sort($arr);
print_r($arr) . PHP_EOL;
rsort($arr);
print_r($arr) . PHP_EOL;

//asort() & arsort()
//Associative Arrays

$arr = ["3" => "John", "1" => "Peter", "2" => "Quagmire"];
print_r($arr) . PHP_EOL;
asort($arr);
print_r($arr) . PHP_EOL;
arsort($arr);
print_r($arr) . PHP_EOL;

//ksort() & krsort()
//Associative Arrays
//Sorting Keys 

ksort($arr);
print_r($arr) . PHP_EOL;
krsort($arr);
print_r($arr) . PHP_EOL;