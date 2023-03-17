<?php
$value = 1;
while ($value <= 10) {
	echo $value . PHP_EOL;
	$value++;
}

$input = 1;
while($input <= 10) {
	$result = $input % 2;
	if ($result == 0){
		echo "Even Number: " . $input . PHP_EOL;
	}
	$input++;
}

$i = 1;
while($i <= 10) {
	$result = $i % 2;
	if ($result > 0){
		echo "Odd Number: " . $i . PHP_EOL;
	}
	$i++;
}