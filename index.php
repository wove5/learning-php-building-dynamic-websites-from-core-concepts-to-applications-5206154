<?php
function double(int|float $b) {}

function multiply($a, $b = 2)
{
  return $a * $b;
}

multiply(5, 5);
multiply(5);

function operation($a, $b = 2, $op = 'mutiply')
{
  switch ($op) {
    case 'add':
      return $a + $b;
      break;
    case 'sub':
      return $a - $b;
    case 'divide':
      return $a / $b;
    default:
      return $a * $b;
  }
}

operation(5, op: 'add');
