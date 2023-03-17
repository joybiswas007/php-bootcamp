<?php

$name = null;

echo $name . PHP_EOL;

echo (isset($name)) ? "Has value" : "Empty";
echo PHP_EOL;

$value = "0";
echo $value . PHP_EOL;

echo (!is_null($value)) ? "Has value" : "Empty";
echo PHP_EOL;

unset($value);
echo PHP_EOL;

echo $value . PHP_EOL;