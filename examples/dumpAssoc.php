<?php

function dumpAssoc($array)
{
   echo "<h3>-----  Associative Array  -----</h3>";
   foreach ($array as $item=>$value)
   {
      echo "<h3>";
      echo "$item: $value";
      if (is_array($value))
      {
         echo "<br />";
         foreach($value as $index=>$content)
            echo "&nbsp;&nbsp;$item [$index]: $content<br />";
      }
      echo "</h3>";
   }
}

?>