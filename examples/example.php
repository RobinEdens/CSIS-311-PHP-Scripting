<?php

$a = 8;
$b = 4;
$c = 7;
$d = 5;

$result = $a+$b;

echo "<h1>$a+$b=$result</h1>";
echo "<h1>$a+$b" . "=$result</h1>";
echo "<h1>$a+$b=" . ($a+$b) . "</h1>";

echo "<h1>$a+$b=";
echo $a+$b; 
echo "</h1>";

echo "\$a is $a";

?>

