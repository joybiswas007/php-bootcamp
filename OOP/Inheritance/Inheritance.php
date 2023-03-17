<?php
declare(strict_types=1);
require_once 'University.php';
require_once 'Teacher.php';

$university1 = new University("MIT", "USA");
$teacher1 = new Teacher ("Jane", 35, "Math", $university1);

$teacher1->printUniversityDetails();
$teacher1->printTeacherDetails();

echo PHP_EOL;
echo "..............................." . PHP_EOL;
echo PHP_EOL;

$university2 = new University("Harvard", "USA");
$teacher2 = new Teacher ("Peter", 43, "Physics", $university2);

$teacher2->printUniversityDetails();
$teacher2->printTeacherDetails();