<?php

$color = $_REQUEST['color'];
echo "<h1>the color is $color<h1>";
if ($color=="red")
  echo "<h1>do stuff for red</h1>";
elseif ($color=="green")
  echo "<h1>do stuff for green</h1>";
elseif ($color=="blue")
  echo "<h1>do stuff for blue</h1>";
elseif ($color=="yellow")
  echo "<h1>do stuff for yellow</h1>";
elseif ($color=="purple")
  echo "<h1>do stuff for purple</h1>";

?>

<form action="radio2.html">
   <input type="submit" value="back to form">
</form>
