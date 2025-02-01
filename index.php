<?php

// Syntax / Parse Errors
echo "Hello";

echo 'Joe\'s favorite food is pizza.';


// Warnings and Notices
echo $x;

if (true) {
  echo "This ran!";
}

// Fatal Errors
echo multiply(4);

//Logic Error
function multiply($a, $b)
{
  return $a + $b;
}



echo multiply(5, 2);
