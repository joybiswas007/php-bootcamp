<?php
$name = "Brian Griffin";
$profession = "Writer";
$department = "Business";
$companyname = "HawtDogCo";
$emailid = "briangriffin@dogmail.com";
$address = "Quahog, Rhode Island, USA";
$workinghours = 8;
$ismarried = false;
$lastsalary = 1096.5;

echo "Employee Name: " . $name . PHP_EOL;
echo "Profession: " . $profession . PHP_EOL;
echo "Works in $department Department" . PHP_EOL;
echo "Works for: " . $companyname . PHP_EOL;
echo "Works $workinghours hours a day." . PHP_EOL;
echo "Email: " . $emailid . PHP_EOL;
echo "Address: " . $address . PHP_EOL;
echo ($ismarried) ? "$name is Married." : "$name is NOT married.";
echo PHP_EOL;
echo "Last Salary Amount: " . $lastsalary . PHP_EOL; 