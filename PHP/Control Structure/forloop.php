<?php
for ($i = 1; $i <= 10; $i++) {
	$value = $i % 2;
	if ($value > 0) {
		echo "Odd Number " . $i . PHP_EOL;
	}
}