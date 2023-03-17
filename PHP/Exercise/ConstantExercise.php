<?php

define("DB", "MySQL");
define("GAZELLE", 10);

echo GAZELLE . PHP_EOL;
function print_constant()
{
	echo DB . PHP_EOL;
}

print_constant();

echo "File Line: " . __FILE__ . PHP_EOL;