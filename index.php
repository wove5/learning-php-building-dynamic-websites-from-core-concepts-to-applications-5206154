<?php
/*
1. Boolean
2. Pass arguments
3. Use built-in functions
*/

function is_palindrome($string)
{
  $string = str_replace(' ', '', $string);
  $string = strtolower($string);
  return ($string == strrev($string));
}

$strings = ['mom', 'World', 'Race Car', 'Wow', 'Was it a car or a cat I saw'];

foreach ($strings as $string) {
  if (is_palindrome($string)) {
    echo "$string is a palindrome. \n";
  } else {
    echo "$string is NOT a palindrome. \n";
  }
}
