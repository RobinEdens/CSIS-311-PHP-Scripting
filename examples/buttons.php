<?php


$button=$_REQUEST['button'];

if ($button=="A")
   echo "<h1>do stuff for the first button</h1>";
elseif ($button=="B")
   echo "<h1>do stuff for the second button</h1>";
elseif ($button=="C")
   echo "<h1>do stuff for the third button</h1>";
elseif ($button=="D")
   echo "<h1>do stuff for the fourth button</h1>";
elseif ($button=="E")
   echo "<h1>do stuff for the fifth button</h1>";

?>


<form action="buttons.html">
<input type="submit" value="back">
</form>
