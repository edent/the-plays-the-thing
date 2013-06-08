<?php
//	Read a file, extract all the characters from it, store each unique character

$fileName = "play_titles.txt";
$file = file_get_contents($fileName);

$chars = preg_split( '/(?<!^)(?!$)/u', $file); 
$unique = array_unique( $chars );

$uniqueChars = "";

//var_dump( $unique);
foreach ($unique as $key => $value) {
	echo "$value";
	$uniqueChars .= $value;
}
file_put_contents("play_titles_unique.txt", $uniqueChars);