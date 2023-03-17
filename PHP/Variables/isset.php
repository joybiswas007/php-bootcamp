<?php

$name;
echo isset($name) ? "Variable Set" : "Variable NOT Set.";

$name = "Quagmire" . PHP_EOL;
echo $name . PHP_EOL;

echo isset($name) ? "Variable Set" : "Variable NOT Set";

$firstname = "Stewie";
$name = $firstname;

echo isset($name) ? "Variable Set" : "Variable NOT Set";