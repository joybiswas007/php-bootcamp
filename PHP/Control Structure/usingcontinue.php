<?php
$value = 1;
while (true) {
    $result = $value % 2;

    if ($result == 1) {
        $value++;
        continue;
    }
    if ($value > 20) {
        break;
    }
    echo "Even Numbers: " . $value . PHP_EOL;
    $value++;
}