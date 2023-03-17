<?php

$planets = ["planets" =>
	[
	   "sun" => [ "temp" => "hot", "color" => "red" ],
	   "moon" => [ "temp" => "cold", "color"  => "white" ],
       "earth" => [ "temp" => "normal", "color" => "blue" ]
	]
];

foreach ($planets as $key => $planetdetails) {
	foreach ($planetdetails as $planetnames => $planet) {
		foreach ($planet as $p) {
			echo $p . PHP_EOL;
		}

	}
}