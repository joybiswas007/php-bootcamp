<?php
$length = "10";
$breath = 20;
$area = $length * $breath;

echo "Area: " . $area . PHP_EOL;

function print_variables()
{
	$name = "Peter";
	echo "The Name is $name" . PHP_EOL;
}
print_variables();

function static_variables()
{
	static $count = 1;
	echo $count . PHP_EOL;
	$count = $count + 1 . PHP_EOL;
}

static_variables();
static_variables();
static_variables();
static_variables();
static_variables();

global $hello;
$hello = "Hello";

function global_variables()
{
	echo $GLOBALS['hello'] . PHP_EOL;
}

global_variables();

echo "Executing Scriptname: " . $_SERVER['PHP_SELF'] . PHP_EOL;

$sex = "female";
$horny = "sex";

echo $horny . PHP_EOL;
echo $$horny;