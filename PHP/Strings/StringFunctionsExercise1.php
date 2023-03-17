<!doctype html>
<html>
<head>
    <title>
        Strings
    </title>
</head>
<body>

<h1>Exercise 1: String Functions</h1>

<h2>Find the Given Word in the String (Case Insensitive)</h2>
<?php
    $find = "Find the Given Word in the String";
    $findWord = "FIND";
    $position = false;
    $position = stripos($find, $findWord) . PHP_EOL;
    if ($position !== false) {
        echo "$findWord has been found!" . PHP_EOL;
    } else {
        echo "$findWord has NOT been found!" . PHP_EOL;
    }
?>

<h2>Calculate the Length of the String</h2>
<?php
echo "String's length: " . strlen($find) . PHP_EOL;
?>
<h2>Remove White Spaces from left in the String</h2>
<?php
$white = "    Hello This is a text for removing white spaces         ";
echo $white . PHP_EOL;
echo trim($white) . PHP_EOL;
?>
<h2>Reverse the String</h2>
<?php
echo strrev($find) . PHP_EOL;
?>

</body>
</html>

