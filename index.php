<?php
$name = "Teresa"; // Heading 1
$city = "NYC";
$movie = "Moana 2"; //Italics
$friends = "Lou and Abby"; //Bold
$candy = "Jelly Beans";
?>

<!DOCTYPE html>
<html>

<head>
  <title>Challenge 1</title>
  <meta name="author" value="Joe Casabona" />
</head>

<body>
  <?php
  echo "<h1>Hello, $name!</h1>";

  echo "<p>SO glad you can join us in $city today! You will be seeing <em>$movie</em> with <strong>$friends</strong>!</p>";

  echo "<p>Be sure to bring some money for snacks. Their favorite candy is $candy.</p>";
  ?>
</body>

</html>