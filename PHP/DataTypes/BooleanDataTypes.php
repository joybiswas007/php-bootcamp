<?php

$flag1 = TRUE;
$flag2 = FALSE;

echo "True :" . $flag1 . PHP_EOL;
echo "False :" . $flag2 . PHP_EOL;

echo ($flag1) ? "True" : "False";
echo PHP_EOL;

echo ($flag2) ? "True" : "False";
echo PHP_EOL;

//String Din Boolean

$name = "John";
$isloggedin = true;

echo ($name && $isloggedin) ? "User logged in." : "User not logged in.";
echo PHP_EOL;

$name = "Peter";
echo ($name === "Peter") ? "Yes Peter" : "Not Peter";
echo PHP_EOL;

$log = "0";

echo ($log) ? "Have value" : "Don't have value.";

$a = null;

echo ($a) ? "have value" : "don't have value";
echo PHP_EOL;

$b = 1;
$c = -1000;
echo ($b) ? "have Value" : "doesn't have value";
echo PHP_EOL;

echo ($c) ? "Have value" : "Doesn't have value";
echo PHP_EOL;