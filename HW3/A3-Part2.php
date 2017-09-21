<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Assignment 3: Program 2 - Checkerboard</title>
<link rel="stylesheet" type="text/css" href="A3-Part2.css">

</head>

<body>
    <h1>Assignment 3: Program 2 - Checkerboard</h1>

    <?php
    #Two for loops to make a checkerboard
    echo "<table>";
    $checkerSpaces = 8;
    $redorblack = TRUE;
    #first loop to define roles
    for ($i = 0; $i < $checkerSpaces; $i++)
    {
      echo "<tr>";
      for ($j = 0; $j < $checkerSpaces; $j++)
      {
        #flip the color for every column
        if ($redorblack)
        {
          $redorblack = FALSE;
          echo "<td style=\"background:red\"> </td>";
        }
        else
        {
          $redorblack = TRUE;
          echo "<td style=\"background:black\"> </td>";
        }
      }
      #Change the first column color that each row starts off with
      if ($redorblack)
      {
        $redorblack = FALSE;
      }
      else
      {
        $redorblack = TRUE;
      }
      echo "</tr>";
    }
    echo "</table>";
    ?>

  </body>
</html>
