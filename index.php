<?php
$colors = ['red', 'green', 'blue', 'yellow'];

foreach ($colors as $color) {
  echo "$color \n";
}

$home_towns = [
  'Joe' => 'Middletown, NY',
  'Erin' => 'West Chester, PA',
  'Dave' => 'Exton, PA',
  'Brian' => 'Grand Rapids, MI',
];

foreach ($home_towns as $name => $town) {
  echo "$name is from $town \n";
}
