<?php

if ( isset($_REQUEST['button1']))
   echo "<h1>do stuff for the first button</h1>";
elseif ( isset($_REQUEST['button2']))
   echo "<h1>do stuff for the second button</h1>";
elseif ( isset($_REQUEST['button3']))
   echo "<h1>do stuff for the third button</h1>";
elseif ( isset($_REQUEST['button4']))
   echo "<h1>do stuff for the fourth button</h1>";
elseif ( isset($_REQUEST['button5']))
   echo "<h1>do stuff for the fifth button</h1>";

?>


<form action="buttons2.html">
<input type="submit" value="back">
</form>
