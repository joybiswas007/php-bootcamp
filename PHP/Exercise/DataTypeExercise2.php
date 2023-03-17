<!doctype html>
<html>
<head>
    <title>
        Data Types
    </title>
</head>
<body>

<h1>Exercise 1: Print Student Details</h1>

<h2>Student Information:</h2>
<?php
$name = "Brian Griffin";
$universityname = "Browns University";
$department = "CSE";
echo "Student Name: " . $name . PHP_EOL;
echo "University Name: " . $universityname . PHP_EOL;
echo "Department Name: " . $department . PHP_EOL;
?>
<h2>Exams Attended and Marks:</h2>
<?php 
$math = 60;
$science = 50;
$english = 70;
$physics = 65.5;
$chemistry = 55.3;
$subject1 = "Math";
$subject2 = "Science";
$subject3 = "English";
$subject4 = "Physics";
$subject5 = "Chemistry";

echo "Attended in $subject1 exam and Marks are: $math" . PHP_EOL; 
echo "Attended in $subject2 exam and Marks are: $science" . PHP_EOL; 
echo "Attended in $subject3 exam and Marks are: $english" . PHP_EOL; 
echo "Attended in $subject4 exam and Marks are: $physics" . PHP_EOL;
echo "Attended in $subject5 exam and Marks are: $chemistry" . PHP_EOL; 
?>
<h2>Final Marks:</h2>
<?php
$totalmarks = $math + $science + $english + $physics + $chemistry;
echo PHP_EOL;
echo "Total Marks: " . $totalmarks;
echo PHP_EOL;
?>

<h2>Percentage:</h2>
<?php
$totalsubject = 500;
$percentage = ($totalmarks / $totalsubject) * 100;
echo PHP_EOL;

echo "Percentage: " . $percentage;
echo PHP_EOL;
?>

<h2>Result:</h2>
<?php
echo ($percentage >= 35) ? "Student has Passed" : "Student did not passed";
echo PHP_EOL;
?>
</body>
</html>

