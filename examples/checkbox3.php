<?php

if ( isset($_REQUEST['red']) &&
     isset($_REQUEST['blue']) &&
     isset($_REQUEST['yellow']) &&
     !isset($_REQUEST['purple']) &&
     !isset($_REQUEST['green']) )
   echo "<h1>you selected all 3 primary colors</h1>";
else
   echo "<h1>you didn't select all 3 primary colors</h1>";

?>

<form action="checkbox3.html">
   <input type="submit" value="back to form">
</form>
