<?php

$planets = [
   "planets" =>
	[
	   "sun" => [ "temp" => "hot", "color" => "red" ],
	   "moon" => [ "temp" => "cold", "color"  => "white" ],
       "earth" => [ "temp" => "normal", "color" => "blue" ]
	]
];	

foreach($planets as $key => $value) {
	foreach($value as $panetsdetils => $planet) {
		foreach ($planet as $p) {
			echo $p . PHP_EOL;
		}
	}
}
