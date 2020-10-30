<?php
//make sure space at end of dictionary isn't used, multi dictionary support
$dictionary_file = 'dictionaries/friendly_words.txt';
$lines = file($dictionary_file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
?>