<?php
$planets = [
   "planets" =>
	[
	   "sun" => [ "temp" => "hot", "color" => "red" ],
	   "moon" => [ "temp" => "cold", "color"  => "white" ],
       "earth" => [ "temp" => "normal", "color" => "blue" ]
	]
];

foreach ($planets as $key => $planet) {
		foreach ($planet as $planetdetails => $planetname) {
			foreach ($planetname as $p) {
				echo $p . PHP_EOL;

			}
		}
	}	
