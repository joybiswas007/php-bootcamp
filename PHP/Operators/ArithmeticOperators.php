<?php

$math = 60;
$english = 80;
$science = 50;
$totalMarks = $math + $english + $science;

echo "Total Marks: $totalMarks Math($math) + English ($english) + Science ($science). " . PHP_EOL;

echo "Total Marks: " . ($math + $english + $science) . ' ' . "Math($math) + English ($english) + Science ($science)." . PHP_EOL;

$totalSubject = 300;

$achievedMarks = $totalSubject - $totalMarks;

echo "The difference between achieved marks and total marks: " . $achievedMarks . PHP_EOL;

$length = 10;
$breath = 20;
$area = $length * $breath;
echo "Area: " . $area . PHP_EOL;

$percentenge = ($totalMarks / $totalSubject) * 100;

echo "Mark Scored: $percentenge%" . PHP_EOL;

$a = 110 % 5;

echo $a;

$b = 100 % 6;

echo $b;

$a = 10;
$b = 20;

$result = ($a ** 2) * ($b ** 2);
echo $result . PHP_EOL;