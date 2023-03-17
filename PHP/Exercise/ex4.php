<?php
global $car;
global $motorcycle;
$car = "Nissan";
$motorcycle = "BMW";

function car(){
	echo "Car Name: " .  $GLOBALS['car'] . PHP_EOL;
	echo "Executing Scriptname: " . $_SERVER['PHP_SELF'] . PHP_EOL; 
}

car();

function bike(){
echo "Bike Name: " . $GLOBALS['motorcycle'] . PHP_EOL;
}

bike();

echo "Let's count Numbers";

function wtf(){
	static $counter = 1;
	echo $counter;
	$counter = $counter + 1;
}

wtf();
wtf();
wtf();
wtf();
wtf();