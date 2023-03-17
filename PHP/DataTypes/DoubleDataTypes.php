<?php

$number = 99.99;
echo $number . PHP_EOL;
$value = -5;
echo $value . PHP_EOL;

$distance = 78.8;

echo round($distance) . PHP_EOL;

$km = 19.9;
$m = 15.6;
echo (abs($km - $m) < 3.2) ? "Accepted" : "Rejected" . PHP_EOL;