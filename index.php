<?php

$a = 5;
if ($a % 2 == 0) {
  echo "$a is even";
} else {
  echo "$a is odd";
}

echo "\n";

$b = 10;

echo ($b % $a == 0) ? "$a is a factor of $b" : "";

echo -$a % 3;
