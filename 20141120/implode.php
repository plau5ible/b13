<?php

$words = [
	' fudkhgiouer',
	'nfwiel ',
	' iifJDNFJjeoijt',
];
// var_dump($words);

foreach ($words as $key => $value) {
	$words [$key] = strtolower(trim($value));
}


// var_dump($words);

$comma_separated = implode(", ", $words);
echo $comma_separated;

// var_dump($words);