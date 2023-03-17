<?php
$arr = [
	"list1" => ["hdb" => "hdbits", "ab" => "animebytes"],
	"list2" => ["name" => "joy", "id" => 101],
	"list3" => ["sun" => 3, "hell" => "heaven"]

];

var_dump($arr);

foreach ($arr as $value) {
	foreach ($value as $val) {
		echo $val . PHP_EOL;
	}

}

foreach ($arr as $key => $single) {
	echo "Keys: " . $key . PHP_EOL;
	foreach ($single as $single_values) {
		echo $single_values . PHP_EOL;
	}
}

print_r(array_keys($arr)) . PHP_EOL;

foreach (array_keys($arr) as $key) {
	echo $key . PHP_EOL;
}