<?php

/*
   $fruits["banana"] = "yellow";
   $fruits["apple"] = "red";
   $fruits["orange"] = "orange";
   $fruits["kiwi"] = "green";
   $fruits["blueberry"] = "blue";
*/

   $fruits = array(
       "banana" => "yellow",
       "apple" => "red",
       "orange" => "orange",
       "kiwi" => "green",
       "blueberry" => "blue");
      
    echo "<h3>";
    foreach($fruits as $fruit)
       echo $fruit . "<br/>";
    echo "</h3>";

    echo "<h3>";
    foreach($fruits as $fruit=>$color)
       echo "$fruit is $color<br/>";
    echo "</h3>";
    
    echo "<h3>";
    reset($fruits);
    while (current($fruits))
    {
       echo key($fruits) . " is " . current($fruits) . "<br/>";
       next($fruits);
    }
    echo "</h3>";
      

?>
