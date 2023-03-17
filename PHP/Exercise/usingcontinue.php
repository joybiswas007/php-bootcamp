<?php
$value = 1;
while (true) {
    $result = $value % 2;
    if ($result == 1) {
        $value++;
        continue;
    }

    if ($result > 10) {
        break;
    }
    echo "Even Numbers: " . $value . PHP_EOL;
    $value++;
}