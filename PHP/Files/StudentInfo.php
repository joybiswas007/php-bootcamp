<?php

/*1) Create CSV Files with Student details
2) Each line in CSV is one Student Details.
3) Read the CSV File and Store the Students details in Array
4) Iterate the Array and Print the Students Table in HTML Format.*/

$csvFile = "studentinfo.csv";

$filename = file($csvFile);

foreach ($filename as $line) {
	$data[] = str_getcsv($line);
	print_r($data);
}

$csv = array_map('str_getcsv', $filename);

print_r($csv);