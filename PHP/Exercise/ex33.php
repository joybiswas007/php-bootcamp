<?php

echo "Current date: " . date("d-m-y") . PHP_EOL;
echo "Current date: " . date("D-M-Y") . PHP_EOL;
echo "Current date: " . date("d-m-Y") . PHP_EOL;

echo "Time in Miliseconds: " . time() . PHP_EOL;

echo "Current date & time: " . date("d-m-Y h:i:s:a") . PHP_EOL; 
echo "Current date & time: " . date("d-m-Y H:i:s:A") . PHP_EOL; 

$time = time() + 21600;

echo "Current date & time: " . date("d-m-Y h:i:s:a", $time) . PHP_EOL;

$result = 0;
function add ($a, $b, &$result = null){
	$result = $a + $b;
}

add(10, 10, $result);
echo $result . PHP_EOL;

$date = getdate();

// print_r($date);

foreach ($date as $format => $value) {
	echo "$format => $value" . PHP_EOL;
}
 echo "Year: " . $date['year'] . PHP_EOL;
 echo "Weekday: " . getdate()['weekday'] . PHP_EOL;
  echo "Time : " .  date_create("+1 day")->format("d-m-Y h:i:s:a") . PHP_EOL;
  echo "Time: " . date_create("+100 day")->format("d-m-Y h:i:s:a") . PHP_EOL;
  echo "Time: " . date_create("-1 day")->format("d-m-Y h:i:s:a") . PHP_EOL;

  $strTime = strtotime("15-02-2023 05:11:49");
  echo date("d-m-Y h:i:a", $strTime) . PHP_EOL;

  if (time() >= $strTime) {
  	echo "Time is ahead." . PHP_EOL;
  } else {
  	echo "Time is NOT ahead." . PHP_EOL;
  }

  echo date_default_timezone_set("Australia/Melbourne") . PHP_EOL;
  echo date("d-m-Y h:i:a") . PHP_EOL;
  echo date_default_timezone_get() . PHP_EOL;
  echo date("d-m-Y h:i:a") . PHP_EOL;


  $time1 = time() + 1000;
  $time2 = time() + 20000;

  $timediff = ($time2  - $time1) / 60;

  echo "Time Difference: " . $timediff . PHP_EOL;

  sleep(5);

  $start = date_create("15-02-2023 05:29:16");
  $end = date_create("25-05-2023 05:29:16");

  $diff = date_diff($end, $start);

  print_r($diff);