<?php
function random_char($string) {
  $i = random_int(0,strlen($string)-1); //use mtrand if working with an older version or third party library, maybe add param?
  return $string[$i];
}
function random_string($length, $char_set) {
  for($i=0; $i < $length; $i++) {
    $output .= random_char($char_set);
  }
  return $output;
}

function generate_password($length) {
  //define character sets
  $lower = implode(range('a','z'));
  $upper = implode(range('A','Z'));
  $numbers = implode(range(0,9));
  $symbols = '!@#$%^&*()';

  //extract configuration flags into variables
  $use_lower = true;
  $use_upper = true;
  $use_numbers = true;
  $use_symbols = true;

  $chars = '';
  if($use_lower === true) { $chars .= $lower; }
  if($use_upper === true) { $chars .= $upper; }
  if($use_numbers === true) { $chars .= $numbers; }
  if($use_symbols === true) { $chars .= $symbols; }

  return random_string($length, $chars);
}
echo generate_password(8);
?>