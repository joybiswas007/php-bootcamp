<?php
for ($i = 1; $i <= 10; $i++) {
	$j = $i % 2;
	if ($j > 0) {
		echo "Odd Number: " . $i . PHP_EOL;
	}
}