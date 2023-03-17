<?php

$date1 = time();
sleep(10);

$date2 = time();
sleep(10);

$diff = ($date2 - $date1) / 60;
echo $diff . PHP_EOL;