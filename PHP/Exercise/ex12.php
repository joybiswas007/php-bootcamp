<?php
/* 1) Define and Assign $firstname and $lastname variable with your name.
2) Print the firstname, lastname using echo / print
3) Embed the variable inside the quotes.
4) Define a function to print the name.
5) Show PHP Variables are case sensitive.
6) Create a local variable outside the function and define same inside the function. Display the variable
7) Define and show the Global Variable
8) Define and show the Static Variable
9) Show a Super Global Variable
10) Define and show Variable of Variables
11) Use the isset method using tenary operators
12) Define and Display a Constant.
13) Show magic constant */

$firstname = "Joy";
$lastname = "Biswas";
echo $firstname, $lastname . PHP_EOL;
echo "$firstname" . "$lastname"  . PHP_EOL;

function printName(){
	$firstname = "Joy";
    $lastname = "Biswas";
	echo "$firstname" . "$lastname"  . PHP_EOL;
}

printName();

$FirstName = "Joy";
echo "First Name: " . $FirstName . PHP_EOL;

$file_type = "PHP";
echo "File Type: " . $file_type . PHP_EOL;

function printVariables(){
	$file_type = "PHP";
	echo "File Type: " . $file_type . PHP_EOL;
} 

printVariables();

global $length, $breath;

$length = 10;
$breath = 20;
$area = $length * $breath;

echo "Area: " . $area . PHP_EOL;

function displayNumber(){
	echo "Area: " . $GLOBALS['length'] * $GLOBALS['breath'] . PHP_EOL;
}
displayNumber();

	function Counter(){
		static $count = 1;
		echo $count . PHP_EOL;
		$count++;
	}

	Counter();
	Counter();
	Counter();
	Counter();
	Counter();

echo "Executing Scriptname: " . $_SERVER['PHP_SELF'] . PHP_EOL;

$gender = "male";
$sex = "gender";

echo $sex . PHP_EOL;
echo $$sex . PHP_EOL;

$value = 1;
echo (!isset($value)) ? "Value NOT set" : "Value set" . PHP_EOL;

define ("LANGUAGE" , "PHP");

echo "I'm learning " . LANGUAGE . PHP_EOL;
echo "Current Directory: " . __DIR__ . PHP_EOL;
echo "Current File: " . __FILE__ . PHP_EOL;
echo "Current Line: " . __LINE__ . PHP_EOL;