<?php
function counter()
{
	$counter = 1;
	echo $counter . PHP_EOL;
	$counter = $counter + 1;
}

counter();
counter();
counter();
counter();
counter();


echo "Static Variables" . PHP_EOL;

function count_stat()
{
	static $count = 1;
	echo $count . PHP_EOL;
	$count = $count + 1;
}

count_stat();
count_stat();
count_stat();
count_stat();
count_stat();