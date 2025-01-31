<?php
$names = ['Joe', 'Erin', 'Teresa', 'Louis', 'Abigail'];

usort($names, function ($a, $b) {
  return $a[1] <=> $b[1];
});

print_r($names);
