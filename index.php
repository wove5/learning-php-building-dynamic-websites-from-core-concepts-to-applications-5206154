<?php

$status = rand(0, 2);

$message = match ($status) {
  1 => "Welcome back!",
  2 => "Hello! You are currenly logged in as Admin",
  default => "You must log in or create an account."
};

echo $message . "\n";

switch ($status) {
  case 1:
    echo "Welcome back!";
    break;
  case 2:
    echo "Hello! You are currenly logged in as Admin";
    break;
  default:
    echo "You must log in or create an account.";
}
