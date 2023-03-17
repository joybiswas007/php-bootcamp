<!doctype html>
<html>
<head>
    <title>
        Control Structures
    </title>
</head>
<body>
    <h1>Exercise 1: Display Odd and Even Numbers</h1>
    <table>
        <tr>
            <td>Name</td>
            <td>Odd</td>
            <td>Even</td>
        </tr>
    <?php
    require_once 'NamspaceConfig.php';
    echo config\MAX_NUMBERS;

    for($count = 1; $count <= config\MAX_NUMBERS; $count++){
        $result = $count % 2;
            echo "<tr>";
            echo "<td>$count</td>";
        if($result == 0){
            echo "<td>No</td>";
            echo "<td>Yes</td>";
        } else {
            echo "<td>Yes</td>";
            echo "<td>No</td>";
        }
        echo "</tr>";
    }


    ?>
</table>

</body>
</html>

