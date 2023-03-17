<?php

//Read entire content
$fileName = "pwds.csv";
$content = file_get_contents($fileName);
print_r($content);

//Read line by line
$CSVFile = file($fileName);

foreach ($CSVFile as $line) {
	echo $line;
}

foreach($CSVFile as $line) {
	$data[] = str_getcsv($line);
	var_dump($data);
}

$csv = array_map('str_getcsv', file($fileName));

print_r($csv);