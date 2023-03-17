<?php
$name = "Meg";
define("name", "Lois");

echo $name . name . PHP_EOL;

define("name", "Chris");
$name = "Walter White";
echo $name . name;

echo "We can change variables but  can't change constant";

function print_constant(){
	echo $name . name .PHP_EOL;
}

print_constant();