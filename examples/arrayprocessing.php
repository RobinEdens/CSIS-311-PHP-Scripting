<?php
   $numbers = array(6,4,9,7,3);
   $months = array("January", "February", "March", "April", "May",
                   "June", "July", "August", "September",
                   "October", "November", "December");
   $days = array("Monday", "Tuesday", "Wednesday", "Thursday",
                 "Friday", "Saturday", "Sunday");
     
   output1($numbers);
   output5($months);
   output5($days);
   function output1($array)
   {
      echo "<h3>";
      for ($i=0; $i<count($array); $i++)
         echo "$array[$i] at position $i; ";
      echo "</h3>";
   }
   function output2($array)
   {
      echo "<h3>";
      foreach($array as $item)
         echo "$item ";
      echo "</h3>";
   }  
   function output3($array)
   {
      reset($array);
      echo "<h3>";
      foreach($array as $item)
      {
         echo current($array) ." is at position "
              . key($array) . "; ";
         next($array);
      }
      echo "</h3>";
   }
   function output4($array)
   {
      reset($array);
      echo "<h3>Array: ";
      while (current($array))
      {
         echo current($array) . "; ";
         next($array);
      }
      echo "</h3>";
   }
   function output5($array)
   {
      end($array);
      echo "<h3>Array: ";
      while (current($array))
      {
         echo current($array) . "; ";
         prev($array);
      }
      echo "</h3>";
   }
   
?>