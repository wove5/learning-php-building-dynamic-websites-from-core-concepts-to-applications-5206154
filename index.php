<?php

$list = file('list.txt');
$fhandle = fopen('sub-list.txt', 'a');
foreach ($list as $entry) {
  if (strpos($entry, 'casabona.org')) {
    fwrite($fhandle, $entry);
  }
}
fclose($fhandle);


$string = "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";

echo file_put_contents('file-2.txt', $string);

$email = "Lou C, lou@casabona.org \n";

file_put_contents('list.txt', $email, FILE_APPEND);
