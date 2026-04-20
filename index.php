<?php
// $status = 0;
$status = rand(0, 2);

$msg0 = 'You must log in or create an account.';
$msg1 = 'Welcome back!';
$msg2 = 'Hello, you are logged in as Admin.';

$message = match ($status) {
  0 => $msg0,
  1 => $msg1,
  2 => $msg2,
  default => 'Unknown'
};
print "<h1>$message</h1>\n";

// $status = 1;
$message = match ($status) {
  0 => $msg0,
  1 => $msg1,
  2 => $msg2,
  default => 'Unknown'
};
print "<h1>$message</h1>\n";

// $status = 2;
$message = match ($status) {
  0 => $msg0,
  1 => $msg1,
  2 => $msg2,
  default => 'Unknown'
};
print "<h1>$message</h1>\n";
echo "status was $status\n";
