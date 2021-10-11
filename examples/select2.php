<?php

$color = $_REQUEST['color'];

if ($color=="red" or $color=="blue" || $color=="yellow")
   echo "<h1>you picked a primary color</h1>";
else
   echo "<h1>you didn't pick a primary color</h1>";
?>

<form action="select2.html">
   <input type="submit" value="back to form">
</form>
