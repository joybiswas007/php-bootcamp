<?php
$result = 0;

function add($a, $b, &$result = null) {
		$result = $a + $b;
}

echo $result . PHP_EOL;
add(1, 3, $result) . PHP_EOL;
echo $result . PHP_EOL;