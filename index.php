<?php
function multiply($a, $b)
{
  if ($a < 0 || $b < 0) {
    throw new Exception("The result will not be positive.");
  }
  return $a * $b;
}

try {
  $x = multiply(-5, 2);
} catch (Exception) {
  echo $e->getMessage();
}
