<?php

$filename = "ex41.php";

$fileHandler = fopen($filename, "a");

fwrite($fileHandler, " This is a new line of text");

fclose($fileHandler);