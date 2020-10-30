<?php
//make multi dictionary support
function read_dictionary($filename="") {
  $dictionary_file = "dictionaries/{$filename}";
  return file($dictionary_file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
}

$basic_words = read_dictionary('friendly_words.txt');
$brand_words = read_dictionary('brand_words.txt');

$words = array_merge($brand_words, $basic_words);
// could use array_unique to prevent any repeats

for ($i=0; $i<8; $i++) {
  echo $words[$i] . "<br />";
}
?>