<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>

<?php
/*1) Create a Students Array with 3 students
2) Provide the details: ID, Name, Age and Class
3) Fill up the Array and Display in HTML Page
4) Use Table to display the Students details.*/

$students = [
    "student1" => [
        "ID" => 101,
        "Name" => "Stewart",
        "Age" => 21,
        "Class" => "B.Sc"
    ],
    "student2" => [
        "ID" => 102,
        "Name" => "Chris",
        "Age" => 20,
        "Class" => "12th"
    ],
    "student3" => [
        "ID" => 103,
        "Name" => "Megan",
        "Age" => 18,
        "Class" => 10
    ]
];
?>
<table align="left" border="1" cellpadding="3" cellspacing="3">
<?php 
foreach ($students as $key => $value) {
    echo "<tr>";
    foreach ($value as $studentinfo => $information) {
        echo "<td>$studentinfo: " . $information . "</td>";
    }
    echo "</tr>";
}
?>
</table>

</body>
</html>