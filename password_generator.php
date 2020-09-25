<?php
$lower = implode(range('a','z'));
$upper = implode(range('A','Z'));
$numbers = implode(range(0,9));
$symbols = '!@#$%^&*()';

$chars = $lower . $upper . $numbers . $symbols;

echo $chars;
?>