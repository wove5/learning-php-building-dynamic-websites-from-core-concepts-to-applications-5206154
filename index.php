<?php

echo "Hello, " . "Joe";

$name = "Joe";

echo "Hello, " . $name . "\n";

$greeting = "Hello, ";
$greeting .= $name;

//echo $greeting;

$first_name = "Joe";
$last_name = "Casabona";
$full_name = $first_name . " " . $last_name . "\n";

echo $full_name;

$fname = "Dave";
$lname = "Smith";
$full_name2 = "$fname $lname\n";
echo $full_name2;

$daughter_name = "Teresa";

$daughter_full_name = $daughter_name . " " . $last_name;

echo "<h1>Welcome, " . $daughter_name . "</h1>";
