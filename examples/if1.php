<?php

$larger = 10;
$smaller = 17;

if ($smaller > $larger)
{
   $temp = $larger;
   $larger = $smaller;
   $smaller = $temp;
}

echo "<h1>smaller is $smaller</h1>";
echo "<h1>larger is $larger</h1>";


?>
