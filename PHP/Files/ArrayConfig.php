<?php

$config = parse_ini_file("config.ini");

print_r($config);

foreach($config as $key => $value) {
	echo $key . "=>" . $value . PHP_EOL;
}

echo $config['hdb'] . PHP_EOL;