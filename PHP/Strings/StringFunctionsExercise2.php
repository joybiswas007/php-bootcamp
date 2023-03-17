<!doctype html>
<html>
<head>
    <title>
        Strings
    </title>
</head>
<body>

<h1>Exercise 2: String Functions</h1>

<h2>Word Wrap the Long String</h2>
<?php
$word = "The purpose of lorem ipsum is to create a natural looking block of text (sentence, paragraph, page, etc.) that doesn't distract from the layout. A practice not without controversy, laying out pages with meaningless filler text can be very useful when the focus is meant to be on design, not content. The passage experienced a surge in popularity during the 1960s when Letraset used it on their dry-transfer sheets, and again during the 90s as desktop publishers bundled the text with their software. Today it's seen all around the web; on templates, websites, and stock designs. Use our generator to get your own, or read on for the authoritative history of lorem ipsum.";

echo wordwrap($word, 25) . PHP_EOL;
?>

<h2>Find and Replace the word in upper case</h2>
<?php
$name = "Stewart Griffin The IV";
$find = "Stewart";
echo str_replace("Stewart", strtoupper($find), $name);
?>
<h2>Count number of words</h2>
<?= 'Total Words: ' . str_word_count($word); ?>

<h2>Shuffle the Strings</h2>
<?php
$text = "this text is for shuffling purposes" . PHP_EOL;
echo str_shuffle($text);
?>

</body>
</html>

