<?php
// While loop for reference: 
$i = 0;
while ($i <= 10) {
  echo "$i \n";
  $i++;
}

/*
for (starting assignment; condition; incrementor) {
  // some code
}
*/

for ($i = 0; $i <= 10; $i++) {
  echo "$i \n";
}

$colors = ['red', 'green', 'blue', 'yellow'];

for ($i = 0; $i < sizeof($colors); $i++) {
  echo $colors[$i] . "\n";
}
