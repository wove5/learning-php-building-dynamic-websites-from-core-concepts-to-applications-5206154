<?php

//$colors = array();
$colors = array('Red', 'Green', 'Blue', 'Yellow');

print_r($colors);

echo $colors[2];

$colors[] = 'Purple';

print_r($colors);

$home_towns = array(
  'Joe' => 'Middletown, NY',
  'Erin' => 'West Chester, PA',
  'Dave' => 'Exton, PA',
  'Brian' => 'Grand Rapids, MI',
);

print_r($home_towns);

echo $home_towns['Erin'] . "\n\n";

$brothers = [
  'joe' => array(
    'age' => 39,
    'job' => 'Podcaster',
    'state' => 'PA',
  ),
  'phil' => array(
    'age' => 37,
    'job' => 'photographer',
    'state' => 'NY',
  ),
  'mike' => array(
    'age' => 36,
    'job' => 'logistics',
    'state' => 'FL',
  ),
  'rob' => array(
    'age' => 34,
    'job' => 'manager',
    'state' => 'FL',
  ),
];

echo $brothers['phil']['age'];

print_r($brothers);
