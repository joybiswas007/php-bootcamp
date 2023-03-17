<?php
$i = 1;
while ($i <= 10) {
	$j = $i % 2;
	if ($j > 0) {
		echo "Odd Numbers: " . $i . PHP_EOL;
	}
	$i++;
}