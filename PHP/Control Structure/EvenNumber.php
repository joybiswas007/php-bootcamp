<?php
for ($i = 1; $i <= 10; $i++) {
	$j = $i % 2;
	if ($j < 1) {
		echo "Even Numbers: " . $i . PHP_EOL;
	}
}


$value = 1;
while ($value <= 10) {
	$result = $value % 2;
	if ($result < 1) {
	echo "Even Numbers: " . $value . PHP_EOL;
	}
	$value++;
}