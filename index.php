<?php
$turtle = 'Leo';
$bandana = '';

switch ($turtle) {
  case 'Leo':
    $bandana = 'blue';
    break;
  case 'Raph':
    $bandana = 'red';
    break;
  case 'Mike':
    $bandana = 'orange';
    break;
  case 'Don':
    $bandana = 'purple';
    break;
  default:
    $bandana = 'red';
}

echo "$bandana \n";
