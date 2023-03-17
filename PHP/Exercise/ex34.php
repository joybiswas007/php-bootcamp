<?php

$time = time();

echo "Time: " . $time . PHP_EOL;

$arr = getdate();

print_r($arr);


echo "Year: " . getdate()['year'] . PHP_EOL;

echo date_create("+1day")->format("d-m-Y h:i:s") . PHP_EOL;

$strTime = strtotime("16-02-2023 04:55:17");

echo date("d-m-y h:i", $strTime) . PHP_EOL;


$filename = "cat.txt";

if (!file_exists($filename)) {
	if (!is_file($filename)) {
		die("No Such file!");
	}
}

echo file_get_contents($filename) . PHP_EOL;


// copy('elseif.php', 'qelseif.php');

// $dir = mkdir("Test");
$path = "Test";

$file = scandir($path);
 var_dump($file);

 foreach($file as $dir) {
 	if ($dir != '.' && $dir != '..') {
 		echo $dir . PHP_EOL;
 	}
 }


$filepath = array_diff($file, ['.', '..']);

print_r($filepath);


$value = 2;

$max_value = 100;

do {
	echo "Square: " . $value . PHP_EOL;
	$value *= 2;
} while($value <= $max_value);

$i = 1;

while ($i <= 10) {
	$j = $i % 2;
	if ($j > 0) {
		echo "Odd Number: " . $i . PHP_EOL;
	}
	$i++;
}

for ($i = 1; $i <= 50; $i++) {
	$j = $i % 2;
	if ($j == 0) {
		echo "Even Number: " . $i . PHP_EOL;
	}
	if ($i == 50) {
		break;
	}
}

$i = 1;
while (true) {
	$j = $i % 2;
	if ($j == 1 ){
		$i++;
		continue;
	}

	if ($i > 10) {
		break;
	}
	echo "Even Numbers: " . $i . PHP_EOL;
	$i++;
}

function checkUserClass($userRoles) {

	if ( empty($userRoles) ){
		echo "Error! roles required for this action." . PHP_EOL;
		return;
	}

switch($userRoles) {
	case "admin":
		echo "Welcome, Admin" . PHP_EOL;
		break;
	case "dev":
		echo "Hello, Developer" . PHP_EOL;
		break;
	case "SysOps":
		echo "Hello, SysOps" . PHP_EOL;
		break;
		default:
		echo "Roles can't be empty" . PHP_EOL;
		break;
	}
}

checkUserClass('');