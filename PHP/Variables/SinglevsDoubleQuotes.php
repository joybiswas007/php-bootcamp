<?php
$single = "Single quotes treates variables as strings" . PHP_EOL;
$doublequotes = "Always use double quotes to print variables" . PHP_EOL;

echo $single . PHP_EOL;
echo $doublequotes . PHP_EOL;

echo "$single" . " : " . "$doublequotes";