<?php

function custom_exception_handler($exception) {
echo "Uncaught Exception: " . $exception->getMessage() . PHP_EOL;
}

set_exception_handler('custom_exception_handler');

function exception_handler($i, $j) {
    try {
        if ($j <= 0) {
            throw new Exception("Divied by zero exception might happen!");
        }
        $div = $i / $j;
    } catch (Exception $e) {
        throw new Exception("Divided by zero exception occured!" . $e->getMessage());
    }
    return $div;
}

echo exception_handler(1, 0);