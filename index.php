<?php
$is_logged_in = true;

if ($is_logged_in) {
  $message = "Welcome back!";
} else {
  $message = "Welcome.";
}

echo "$message \n";

$message = !$is_logged_in ? "Welcome back!" : "Welcome.";

echo "$message \n";

$message = "Welcome" . ($is_logged_in ? ", back!" : "!");

echo "$message \n";

//$name = isset($name) ? $name : "Joe";

//echo $name . "\n";

$name = $name ?? "Phil\n";

echo $name;

$name = "";

$name = $name ?: "Alice";

echo $name;
