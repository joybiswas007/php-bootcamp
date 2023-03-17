<?php

function hello(){
	$chest = 36;
	$waist =24;
	$ass = 36;
	$total = $chest + $waist;
	$measurement = $total + $ass;
	echo $measurement;
}

hello();

Car();
function Car(){
	echo "Nissan";
}