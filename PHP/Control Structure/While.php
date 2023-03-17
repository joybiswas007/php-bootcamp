<?php
$i = 1;
while (true) {
$j = $i % 2;
 if ($j == 1) {
 $i++;
continue;
}

if ($i > 10){
break;
}
echo "Even Nubers:" . $i . PHP_EOL;
$i++;
}
