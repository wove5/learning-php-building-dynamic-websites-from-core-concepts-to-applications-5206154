<?php
$limit = 200;
$current = 1;
$previous = 0;

while ($current < $limit) {
  echo "$current ";
  $next = $current + $previous;
  $previous = $current;
  $current = $next;
}
echo "\n";

$limit = 200;
$current = 1;
$previous = 0;
$sequence = '';

while ($current < $limit) {
  $sequence .= $current . ', ';
  $next = $current + $previous;
  $previous = $current;
  $current = $next;
}

$sequence = rtrim($sequence, ', ');
echo $sequence;
