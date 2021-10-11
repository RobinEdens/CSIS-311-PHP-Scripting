<?php
/*
   $months["January"] = 31;
   $months["February"] = 28;
   $months["March"] = 31;
   $months["April"] = 30;
   $months["May"] = 31;
   $months["June"] = 30;
   $months["July"] = 31;
   $months["August"] = 31;
   $months["September"] = 30;
   $months["October"] = 31;
   $months["November"] = 30;
   $months["December"] = 31;
*/
   $months = array("January" => 31,
                   "February" => 28,
                   "March" => 31,
                   "April" => 30,
                   "May" => 31,
                   "June" => 30,
                   "July" => 31,
                   "August" => 31,
                   "September" => 30,
                   "October" => 31,
                   "November" => 30,
                   "December" => 31);
                   
    output2($months);
    
    function output1($array)
    {
       echo "<h3>";
       foreach ($array as $item => $value)
          echo "item=$item; value=$value<br/>";
       echo "</h3>";
    }
    function output2($array)
    {
       echo "<h3>";
       reset($array);
       while (current($array))
       {
          echo "item=" . key($array) .
               "; value=" . current($array) . "<br/>";
          next($array);
       }
       echo "</h3>";
    }
?>
