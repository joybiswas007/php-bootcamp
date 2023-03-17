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
    $student_name = "John Smith";
    $age = 21;
    $department = "Computer Science";
    $contact = +123456789;
    $subject = "OOP";
    ?>
    <table class="table table-success table-striped">
        <tr>
            <th>Student Name</th>
            <th>Age</th>
            <th>Department</th>
            <th>Contact</th>
            <th>Subject</th>
        </tr>
        <tr>
            <td><?= $student_name; ?></td>
            <td><?= $age; ?></td>
            <td><?= $department; ?> </td>
            <td><?= $contact; ?></td>
            <td><?= $subject; ?></td>
        </tr>
    </table>

    <h2>Exams Attended and Marks:</h2>
    <?php
    $math = 60;
    $science = 55.5;
    $english = 80;
    if ($math && $science && $english) {
        echo "Student has attended all exams" . PHP_EOL;
        echo "Marks: Math ($math), Science ($science) & English ($english)." . PHP_EOL;
    }
    ?>
    <h2>Final Marks:</h2>
    <?php
    $totalMarks = $math + $science + $english;
    echo "Final Mark of $student_name: " . $totalMarks . PHP_EOL;
    ?>

    <h2>Percentage:</h2>
    <?php
    $toalSubjects = 300;
    $percentage = ($totalMarks / $toalSubjects) * 100;
    echo "Percentage: " . $percentage . PHP_EOL;
    ?>

    <h2>Result:</h2>
    <?php
    if ($percentage >= 40) {
        echo $student_name . " has passed the exam." . PHP_EOL;
    } else {
        echo $student_name . " didn't passed the exam." . PHP_EOL;
    }
    ?>

</body>

</html>