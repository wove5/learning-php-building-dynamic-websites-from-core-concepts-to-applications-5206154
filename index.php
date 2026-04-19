<?php
$name = "David"; // Heading 1
$date = date("l, F j, Y");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Title here</title>
  <meta name="author" value="David Amos" />
</head>

<body>
  <?php
  echo "<h1>Hello, $name!</h1>";

  echo "<p>Today is <strong><em>$date!</em></strong></p>";

  echo "<p>Hope you have a nice day $name.</p>";
  ?>
</body>

</html>
