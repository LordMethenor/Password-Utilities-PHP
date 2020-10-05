<?php
$lower = implode(range('a','z'));
$upper = implode(range('A','Z'));
$numbers = implode(range(0,9));
$symbols = '!@#$%^&*()';

$chars = $lower . $upper . $numbers . $symbols;

function random_char($string) {
  $i = random_int(0,strlen($string)-1); //use mtrand if working with an older version or third party library
  return $string[$i];
}

echo random_char($chars);
?>