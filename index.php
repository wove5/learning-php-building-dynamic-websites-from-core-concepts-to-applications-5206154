<?php
$a = 9 > 5; // true
$b = 10 != 10; // false
$c = $a && $b; // false
$d = $a || $b; // true
$e = $b && $c; // false
$f = $a || $d; // true

$logic = [
  '$a' => $a,
  '$b' => $b,
  '$c' => $c,
  '$d' => $d,
  '$e' => $e,
  '$f' => $f,
];

var_dump($logic);


$c = $a and $b; // true

var_dump($c);
