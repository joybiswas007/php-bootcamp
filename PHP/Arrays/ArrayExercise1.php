<?php

/* 1) Define Indexed Array and Associative Array.
2) Use Employee Details as Array
3) Display using foreach */

$employeeid = [101, 102, 103, 104, 105];

foreach ($employeeid as $emp) {
	echo "Employee ID: " . $emp . PHP_EOL;
};

$employee = [
				"Name" => "Glenn Quagmire",
				"Email" => "quagmire@giggitymail.com",
				"Job" => "SysOps",
				"Job Hour" => 8,
];

foreach ($employee as $key => $value) {
	echo "$key => $value" . PHP_EOL;
	}