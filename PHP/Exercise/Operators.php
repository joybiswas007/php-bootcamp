<?php

$a = 100;
echo $a . PHP_EOL;
$a += 10;
echo $a . PHP_EOL;
$a -= 10;
echo $a . PHP_EOL;
$a *= 10;
echo $a . PHP_EOL;
$a /= 10;
echo $a . PHP_EOL;


 $admin = true;
 $permission = false;

 echo ($admin && $permission) ? "Permission granted" : "Access denied";
 echo PHP_EOL;

echo ($admin or $permission) ? "Permission granted" : "Access denied";
echo PHP_EOL;

$first = 4;
$second = 5;

echo $first & $second . PHP_EOL;
echo $first | $second . PHP_EOL;
echo $first ^ $second . PHP_EOL;
echo ~$first . PHP_EOL;
echo ~$second . PHP_EOL;

$value = 1;
echo $value . PHP_EOL;
echo $value++ . PHP_EOL;
echo $value . PHP_EOL;
echo ++$value . PHP_EOL;
echo $value . PHP_EOL;

echo $value-- . PHP_EOL;
echo $value . PHP_EOL;
echo --$value . PHP_EOL;
echo $value . PHP_EOL;

$object = "cpluscplus";
echo ($object === "Java") ? "Value matched" : "value doesn't matched". PHP_EOL;

$n = null;

echo (!is_null($n)) ? "Not null" : "Null";
echo PHP_EOL; 

echo (isset($n)) ? "Has value" : "Empty";
echo PHP_EOL;

$a = 50;
$b = 100;
$c = 200;

$d = $a + $b + $c;
echo "Total Sum is: " . $d . PHP_EOL;
echo "Total Sum is: " . ($a+ $b + $c) . PHP_EOL;

unset($d);

echo @$d;
echo "Nothing here!" . PHP_EOL;

echo "storage: " . `du -sh` . PHP_EOL;
