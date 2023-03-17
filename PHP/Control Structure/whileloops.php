<?php

$i = 1;
while ($i <= 10) {
	echo $i . PHP_EOL;
	$i++;
}

/*while(true){
echo $i++ . PHP_EOL;
}*/
$i = 1;
while ($i <= 10) {
	$result = $i % 2;
	if ($result > 0) {
		echo "Odd Number " . $i . PHP_EOL;
	}
	$i++;
}