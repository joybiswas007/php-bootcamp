<?php

function printNumbers(int $limit, $skipNumbers) {
	for ($i = 0; $i <= $limit; $i++) {
		if ($i == $skipNumbers) {
			continue;
		}
		if ($i%2 != 0) {
			echo "Odd Numbers: $i" . PHP_EOL;
		}
	}
}

printNumbers(20, 3);