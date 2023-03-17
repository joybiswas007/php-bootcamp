<?php

$filename = "cat.txt";

$fileHandler = fopen($filename, "w");
fwrite($fileHandler, "Hans Zimmer");
fclose($fileHandler);

$file = fopen($filename, "a");
fwrite($file, ". Florence + The Machine");
fclose($file);