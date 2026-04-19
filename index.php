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


$c = $a and $b; // c is true
$d = ($c = $a and $b); // d is false

var_dump($c);
var_dump($d);