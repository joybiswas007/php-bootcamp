<?php

// 1) Show Examples using Arithmetical Operator

$a = 10;
$b = 5;

echo "Add: " . $a + $b . PHP_EOL;
echo "Sub: " . $a - $b . PHP_EOL;
echo "Multi: " . $a * $b . PHP_EOL;
echo "Divided: " . $a / $b . PHP_EOL;
echo "Modulus: " . $a % $b . PHP_EOL;


// 2) Show Examples using Conditional Operator
echo ( $a < $b ) ? "$a is less than $b" : "$a is greater than $b" . PHP_EOL;

if ($a > $b) {
	echo "$a is greater than $b" .  PHP_EOL;
} else {
	echo "$a is less than $b" . PHP_EOL;
}


$a = 10;
$b = 20;
$result = $a + $b;

$total = 50;

echo ($result && $total) ? "Both values are Same." : "Both values are NOT same." . PHP_EOL;
echo ($result || $total) ? "Both values are Same." : "Both values are NOT same." . PHP_EOL;
 


// 3) Show Examples using Comparison Operator
// 4) Show Examples using Logical Operator
// 5) Show Examples using Assignment Operator
// 6) Show Examples using Increment and Decrement Operator
// 7) Show Examples using Bitwise Operator
// 8) Show Examples using Execution Operator
// 9) Show Examples using Error Control Operator
// 10) Show Examples using Operator Precedence
