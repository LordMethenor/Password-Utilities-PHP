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

function pick_random_symbol() {
  //unify symbols for all instances
  $symbols = '$*?!-';
  $i = random_int(0, strlen($symbols) -1);
  return $symbols[$i];
}

function pick_random_number($digits=1) {
  $min = pow(10, ($digits -1));
  $max = pow(10, $digits) - 1;
  return strval(random_int($min,$max));
}
$basic_words = read_dictionary('friendly_words.txt');
$brand_words = read_dictionary('brand_words.txt');

$words = array_merge($brand_words, $basic_words);
// could use array_unique to prevent any repeats
$password = pick_random($words);
$password .= pick_random_symbol();
$password .= pick_random_number(3);
$password .= pick_random($words);
echo "Friendly password: " . $password . "<br />";
?>