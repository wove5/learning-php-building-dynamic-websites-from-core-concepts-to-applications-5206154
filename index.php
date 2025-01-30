<?php

echo "Hello, " . "Joe";

$name = "Joe";

echo "Hello, " . $name . "\n";

$greeting = "Hello, ";
$greeting .= $name;

//echo $greeting;

$first_name = "Joe";
$last_name = "Casabona";
$full_name = $first_name . " " . $last_name;

echo $full_name;

$daughter_name = "Teresa";

$daughter_full_name = $daughter_name . " " . $last_name;

echo "<h1>Welcome, " . $daughter_name . "</h1>";
