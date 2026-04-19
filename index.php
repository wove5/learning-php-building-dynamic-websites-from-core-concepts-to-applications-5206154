<html>

<body>
   <?php
   $name = "Teresa"; // Heading 1
   $city = "NYC";
   $movie = "Moana 2"; //Italics
   $friends = "Lou and Abby"; //Bold
   $candy = "Jelly Beans";
   ?>


   <h1>Hello, <?php echo $name; ?>!</h1>
   <p><?php echo "SO glad you could join us in $city today!"; ?>
      You will be seeing <em><?php echo $movie; ?></em>
      with <strong><?php echo $friends . '!'; ?></strong>
   </p>
   <p>Be sure to bring some money for snacks. 
    Their favourite candy is <?php echo $candy; ?>.</p>
</body>

</html>