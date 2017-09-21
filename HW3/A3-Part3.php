<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Assignment 3: Program 3 - Arrays and Functions</title>
<link rel="stylesheet" type="text/css" href="A3-Part2.css">

</head>

<body>
    <h1>Assignment 2: Program 3 - Arrays and Functions</h1>

    <h2>Request 1: Write a standard for loop not FOREACH that prints these months in order.</h2>
    <?php
      $month = array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
      $size = sizeof($month);
      #wrute a standard for loop (not foreach) that prints these months in order
      for ($i = 0; $i < sizeof($month); $i++)
      {
        echo "<br>$month[$i]";
      }
    ?>

    <h2>Request 2: Use a Function to Sort the months in alphabetical order and print months that are now sorted.</h2>
    <?php
      sort($month);
      for ($i = 0; $i < sizeof($month); $i++)
      {
        echo "<br>$month[$i]";
      }
    ?>

    <h2>Request 3: Redo steps 1 and 2 but using foreach.</h2>
    <h3>Request a: Write a FOREACH loop that prints these months in order.</h3>
    <?php
      $month = array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
      $size = sizeof($month);
      #wrute a standard for loop (not foreach) that prints these months in order
      foreach ($month as &$key)
      {
        echo "<br>$key";
      }
    ?>

    <h3>Request b: Use a Function to Sort the months in alphabetical order and print months that are now sorted.</h3>
    <?php
      sort($month);
      foreach ($month as &$key)
      {
        echo "<br>$key";
      }
    ?>

  </body>
</html>
