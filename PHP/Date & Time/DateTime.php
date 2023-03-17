<?php

	echo "Current Date: " . date("d-m-y") . PHP_EOL;
	echo "Current Date: " . date("D-M-Y") . PHP_EOL;

	echo "Current Date: " . date("d-m-Y") . PHP_EOL;

	$time = time();
	echo $time . PHP_EOL;


	echo "Current Date: " . date("d-m-Y h:i:s:A", $time) . PHP_EOL;
	echo "Current Date: " . date("D-M-Y H:i:s:A", $time) . PHP_EOL;