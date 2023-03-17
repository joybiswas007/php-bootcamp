<?php

$max_value = 100;
$value = 2;

do {
	echo "Square: " . $value . PHP_EOL;
	$value *= 2;
} while ($value <= $max_value);

/*do {
echo $value++ . PHP_EOL; 
} while (true);*/