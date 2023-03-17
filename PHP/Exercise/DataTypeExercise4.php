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
$student_name = "Peter";
$age = 21;
$department = "CSE";
$contact = +123456789;
?>
<table class="table table-bordered border-primary">
<tr class="table-active">
<td>Student Name</td>
<td>Age</td>
<td>Department</td>
<td>Contact</td>
</tr>
<tr class="table-active"> 
    <td><?= $student_name; ?></td>
    <td><?= $age; ?></td>
    <td><?= $department; ?></td>
    <td><?= $contact; ?></td>
</tr>
</table>


<h2>Exams Attended and Marks:</h2>
<?php
$math = 60;
$science = 60;
$english = 90;
if ($math && $science && $english){
    echo "Student has attended exam" . PHP_EOL;
    echo "Marks: " . "Math ($math)" . " Science ($science)" . " English ($english)" . PHP_EOL; 
} else {
    echo "Student didn't attended either one or more exam" . PHP_EOL;
}
?>

<h2>Final Marks:</h2>
<?php
$totalMarks = $math + $science + $english;
echo "Final Marks: " . $totalMarks . PHP_EOL;
?>

<h2>Percentage:</h2>
<?php
$totalSubject = 300;
$percentage = ($totalMarks / $totalSubject) * 100;
echo "Percentage: $percentage%". PHP_EOL;
?>
<h2>Result:</h2>
<?php
if ($percentage >= 60){
    echo "Student Passed the exam" . PHP_EOL;
} else {
    echo "Student didn't passed the exam" . PHP_EOL;
}
?>

</body>
</html>

