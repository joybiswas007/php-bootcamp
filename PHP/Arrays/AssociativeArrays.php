<?php

$arr = ["Sun", "Mon", "Wed"];
var_dump($arr);
foreach ($arr as $value) {
	echo $value . PHP_EOL;
}

$userDetails = [
			"Peter" => "peter@petermail.com",
			"Glenn" => "quagmire@aol.com",
			"Brian" => "backwarddog@hawtdawg.com"
];

var_dump($userDetails) . PHP_EOL;

foreach ($userDetails as $key => $value) {
		echo "$key => $value" . PHP_EOL;
}

$userDetails ["Megan"] = "megan@megatron.com";
var_dump($userDetails) . PHP_EOL;


print_r(array_keys($userDetails)) . PHP_EOL;

foreach (array_keys($userDetails) as $key) {
	echo $key . PHP_EOL;

}