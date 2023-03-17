<!DOCTYPE html>
<html>
<head>
	<title>CSV to Array</title>
</head>
<body>
	<table class="table table-bordered table-striped">
<?php
$filename = "pwds.csv";

$arr = file($filename);

foreach ($arr as $key => $line){
	$data[$key] = str_getcsv($line);
	foreach($data as $key => $value) {
		echo '<tr>';
		echo '<td>' . $value[0] . '</td>';
        echo '<td>' . $value[1] . '</td>';
        echo '<td>' . $value[2] . '</td>';
        echo '<td>' . $value[3] . '</td>';
		echo '</tr>';
	}
}
?>
</table>
</body>
</html>