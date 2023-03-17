<?php

echo date_default_timezone_get() . PHP_EOL;
echo date("d-m-Y h:i:s:a") . PHP_EOL;

echo date_default_timezone_set("Australia/Melbourne") . PHP_EOL;
echo date("d-m-Y h:i:s:a") . PHP_EOL;
echo date_default_timezone_get() . PHP_EOL;