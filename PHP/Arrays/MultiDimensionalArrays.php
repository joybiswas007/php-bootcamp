<?php

$arr = [
	"trackerlist1" => ["HDB", "LzTr", "Red"],
	"trackerlist2" => ["AB", "OPS", "M-Team", "PTer", "OB"]
];

var_dump($arr) . PHP_EOL;

foreach ($arr as $singleArray) {
	foreach ($singleArray as $values) {
		echo $values . PHP_EOL;
	}
} 


foreach ($arr as $key => $arrValue) {
	echo $key . PHP_EOL;
	foreach ($arrValue as $values) {
		echo $values . PHP_EOL;

	}
}