<?php

$dateArr = getdate();

foreach($dateArr as $format => $value) {
	echo "$format => $value" . PHP_EOL;
}

echo "Year: " . $dateArr['year'] . PHP_EOL;

echo "Year: " . getdate()['year'] . PHP_EOL;
echo "Time: " . getdate()['0'] . PHP_EOL;