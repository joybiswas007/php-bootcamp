<?php

$name = "Cleveland Brown";
$number = 10;

echo <<< DOC_LABEL
"Hakuna bata" . <?php ?>
<?= '' ?>
Doc Label name can be anything you like;

except for variable interpolation nothing will work here;
$name;
$number;

\t(true) ? "Effect" : \n"No Effect";
echo PHP_EOL;
Escape characters works here found something new.

DOC_LABEL;