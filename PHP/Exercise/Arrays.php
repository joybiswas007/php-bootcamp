<?php
$arr = [
    "Weekday" => [
        "sun" => "Sunday",
        "mon" => "Monday"
    ],
    "Months" => [
        "jan" => "January",
        "feb" => "February"
    ],
    "Daily" => [
        "morning" => "Morning",
        "noon" => "Afternoon"
    ]
];

print_r($arr) . PHP_EOL;

foreach (array_keys($arr) as $key) {
    echo "Keys: " . $key . PHP_EOL;
}

foreach ($arr as $key => $value) {
    foreach ($value as $val => $va) {
        echo "$key => $val => $va" . PHP_EOL;
    }
}


$arr1 = "N0M4D, F4TS0, Trigg3r, SQRT";

//String to Array

$arr2 = explode(",", $arr1);
print_r($arr2) . PHP_EOL;

//Copy array

foreach ($arr2 as $key => $value) {
    $arr3[$key] = $value;
}

print_r($arr3) . PHP_EOL;
