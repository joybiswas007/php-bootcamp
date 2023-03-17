<!doctype html>
<html>
<head>
    <title>
        Data Types
    </title>
</head>
<body>

<h1>Exercise 1: Use All Data Types</h1>

<h2>Calculate the area using Length and breath using Integer:</h2>
    <?php
        $length = 10;
        $breath = 20;
        $area = $length * $breath;
        echo "Area :" . $area;
        echo PHP_EOL;
        ?>

<h2>Calculate Student Exact Marks Percentage with Double:</h2>
<?php 
    $math = 80.5;
    $science = 50;
    $english = 60.6;
    $totalmarks = $math + $science + $english;
    $totalsubjects = 300;
    $percentage = ($totalmarks / $totalsubjects) * 100;
    echo "Marks Percentage: $percentage%";
    echo PHP_EOL;
    ?>

<h2>Check if the user has admin roles:</h2>
<?php
$admin = true;
$permission = true;
echo ($admin && $permission) ? "Welcome, Admin!" : "Unauthorized user";
echo PHP_EOL;
?>

<h2>Define and Display a User Name using Strings:</h2>
<?php
$username = "Peter";
echo "The Name of the user is: $username";
echo PHP_EOL;
?>
<h2>Check if the variable is null or not:</h2>
<?php
    $value = null;
    echo (is_null($value)) ? "Null" : "NOT Null";
    echo PHP_EOL;
?>

</body>
</html>

