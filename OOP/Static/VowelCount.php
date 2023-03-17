<?php

class VowelCount{
	public $result;
	static function VowelCount($result) {
		return substr_count($result, "a") + substr_count($result, "e") + substr_count($result, "i")
		+ substr_count($result, "o") + substr_count($result, "u");
	}
}

echo "Found Vowels: " . VowelCount::VowelCount("This is a test aaaa for founding vowels") . PHP_EOL;