<?php

echo date_create("now")->format("Y-m-d H:i:s") . PHP_EOL;
echo date_create("+1day")->format("Y-m-d H:i:s") . PHP_EOL;
echo date_create("-1day")->format("Y-m-d H:i:s") . PHP_EOL;

$strTime = strtotime("2023-02-13 15:15:53");

echo date("y-m-d h:i:s", $strTime), PHP_EOL;

if($strTime >= time()) {
	echo "Time is ahead" . PHP_EOL;
} else {
	echo "Time is NOT ahead" . PHP_EOL;
}