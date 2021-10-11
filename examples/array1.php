<?php

$numbers = getRandoms(10,1,100);
outputArray($numbers);
$numbers2 = array(5,4,7,2);
outputArray($numbers2);
sort($numbers2);
outputArray($numbers2);
rsort($numbers2);
outputArray($numbers2);

function getRandoms($howmany,$first,$last)
{
   for ($i=0; $i<$howmany; $i++)
      $nums[$i]=rand($first,$last);
   return $nums;
}

function outputArray($numbs)
{
   echo "<h1>";
   for ($i=0; $i<count($numbs); $i++)
      echo "$numbs[$i] ";
   echo "</h1>";
}



?>