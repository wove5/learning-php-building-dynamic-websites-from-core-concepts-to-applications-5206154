<?php
//Passing by Value
function add_two($a)
{
  return $a + 2;
}

$z = 2;
echo add_two($z) . "\n";

echo "\n $z \n";

//Passing by reference
function double(&$b)
{
  $b *= 2;
}

$y = 9;
double($y);

echo "\n $y \n";

$numbers = [1, 2, 3, 4];

foreach ($numbers as &$n) {
  double($n);
}

print_r($numbers);

//Using the Global Scope
function triple()
{
  global $c;
  $c *= 3;
}

$c = 10;
triple();

echo "\n $c \n";
