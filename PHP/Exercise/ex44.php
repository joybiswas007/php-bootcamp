<?php

/*1) Define and Assign $firstname and $lastname variable with your name.
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
13) Show magic constant
*/

$firstname = "Joy";
$lastname = "Biswas";
echo $firstname . ' ' . $lastname . PHP_EOL;

echo "\"$firstname $lastname\"" . PHP_EOL;

function printName() {
	$firstname = "Joy";
	$lastname = "Biswas";
	echo "My Name is: " . $firstname . ' ' . $lastname . PHP_EOL;
}

printName();

$name = "Joy";
$Name = "Hello";

echo '$name is: ' . $name . PHP_EOL;
echo '$Name is: ' . $Name . PHP_EOL;

$color = "Red";

echo '$color is: ' . $color . PHP_EOL;

function displayColor() {
	$color = "Red";
	echo '$color is also :' . $color . " here." . PHP_EOL;
}

displayColor();

global $pass, $hased;

$pass = "Hakunabata";

$hash = password_hash(str_shuffle($pass), PASSWORD_DEFAULT);

function hash_password() {

	echo $GLOBALS['hash'] . PHP_EOL;
}

hash_password();

function static_vars() {
	static $count = 1;
	echo $count . PHP_EOL;
	$count++;
}

static_vars();
static_vars();
static_vars();
static_vars();
static_vars();
static_vars();
static_vars();
static_vars();
static_vars();
static_vars();


echo "Current Executing Scriptname: " . $_SERVER['SCRIPT_NAME'] . PHP_EOL;

$sex = "male";
$gender = "sex";

echo $gender . PHP_EOL;

echo $$gender . PHP_EOL;

$value = 10;

echo (isset($value)) ? "Value is Set." : "Value NOT Set." . PHP_EOL;

$index = null;

echo (!isset($index)) ? "Value NOT Set." : "Value Set." . PHP_EOL;

define("LANGUAGE", "PHP");

echo LANGUAGE . " is fun " .  PHP_EOL;

const DB = "MySQL";

echo "Database is: " . DB . PHP_EOL;

echo "Current Line: " . __LINE__ . PHP_EOL;

echo "Current Filename: " . __FILE__ . PHP_EOL;

echo "Present Working Directory: " . __DIR__ . PHP_EOL;