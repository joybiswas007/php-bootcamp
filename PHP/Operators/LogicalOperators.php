<?php

$user = "John";
$loggedin = true;
$permission = true;

echo ($loggedin and $permission) ? "Hello, $user." : "Hello, Guest.";
echo PHP_EOL;

$student = "Peter";
$mathpassed = true;
$sciencepassed = true;

echo ($mathpassed or $sciencepassed) ? "$student has passed." : "$student didn't passed.";
echo PHP_EOL;

$result1 = true and false;
$result2 = true && false;
echo ($result1) ? "True" : "False";
echo PHP_EOL;
echo ($result2) ? "True" : "False";
echo PHP_EOL;
echo (true && false) ? "True" : "False";
echo PHP_EOL;

echo (true and false) ? "True" : "False";
echo PHP_EOL;

$achievedmarks = 34;
$passedmarks = 35;

$isPassed = ($achievedmarks >= $passedmarks) ? true : false;
echo PHP_EOL;
echo (!$isPassed) ? "Not Passed." : "Passed.";
echo PHP_EOL;