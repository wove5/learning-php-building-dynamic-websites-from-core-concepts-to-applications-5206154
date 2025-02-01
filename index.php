<?php
$content = file('file.txt');
var_dump($content);

$web = file_get_contents('https://casabona.org');

if (strpos($web, 'wp-content')) {
  echo "\n This is running WordPress \n";
}
