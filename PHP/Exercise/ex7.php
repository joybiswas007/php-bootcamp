<?php

$a = 10;
$b = 20;

$result = $a + $b;

echo $result . PHP_EOL;

$achievedmarks = 34;
$passedmarks = 35;
$student = "Peter";

$isPassed = ($achievedmarks >= $passedmarks) ? true : false;
echo PHP_EOL;
echo (!$isPassed) ? "$student has not Passed." : "$student has passed.";
echo PHP_EOL;

$number = 10;
$result = $number%2;
echo ($result == 0) ? "Even Number" : "Odd Number"; 
echo PHP_EOL;

$permission = true;
$loggedin = true;
$user = "Peter";
echo ($permission && $loggedin) ? "Hello, $user" : "Hello, Guest";
echo PHP_EOL;

$value = 10;

$value += 10;
echo $value;