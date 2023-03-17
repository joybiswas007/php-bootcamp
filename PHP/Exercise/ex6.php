<?php

$name = "Jesse, Pinkman";

$length = "20";
$breath = 10;
$area = $length * $breath;

echo "Area: " . $area;

global $Name;
$Name = "Walter, White";

function print_global_variables(){
	echo $GLOBALS['Name'];
}
print_global_variables();

echo "$name and $Name is NOT Same";
echo '$name and $Name Single quotes does not print  variables';

function counting_number(){
static $count = 1;
echo $count;
$count = $count +1;
}

counting_number();
counting_number();
counting_number();
counting_number();
counting_number();

	global $count;
	$count = 1;

$countof = "count";

echo $$countof;

echo isset($$countof) ? "Set" : "NOT Set";
