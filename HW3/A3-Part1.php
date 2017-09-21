<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Assignment 3: Program 1 - Charlie Ate My Lunch</title>
</head>

<body>
  <h1>Assignment 3: Program 1 - Charlie Ate My Lunch</h1>

  <?php
  #Define the function with 50% probability
  function isBitten()
  {
    if (rand(0, 1))
    {
      return TRUE;
    }
    else
    {
      return FALSE;
    }
  }
  #Dynamically generate the page.
  if (isBitten())
  {
    echo "<p>Charlie ate my lunch!</p>";
  }
  else
  {
    echo "<p>Charlie did not eat my lunch!</p>";
  }
  ?>

</body>
</html>
