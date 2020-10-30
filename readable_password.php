<?php
//make multi dictionary support
function read_dictionary($filename="") {
  $dictionary_file = "dictionaries/{$filename}";
  return file($dictionary_file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
}

function pick_random($array) {
  //unify random function for all instances
  $i = random_int(0, count($array)-1);
  return $array[$i];
}
$basic_words = read_dictionary('friendly_words.txt');
$brand_words = read_dictionary('brand_words.txt');

$words = array_merge($brand_words, $basic_words);
// could use array_unique to prevent any repeats

for ($i = 0; $i < 3; $i++) {
  $password = $password . pick_random($words);
}
echo "Friendly password: " . $password . "<br />";
?>