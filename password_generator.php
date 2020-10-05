<?php
$lower = implode(range('a','z'));
$upper = implode(range('A','Z'));
$numbers = implode(range(0,9));
$symbols = '!@#$%^&*()';

$chars = $lower . $upper . $numbers . $symbols;

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
echo random_string(8, $chars);
?>