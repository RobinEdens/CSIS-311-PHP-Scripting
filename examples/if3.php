<?php

$num1 = $_REQUEST['num1'];
$num2 = $_REQUEST['num2'];
$num3 = $_REQUEST['num3'];

if ($num1 > $num2)
    if ($num1 > $num3)
       $largest = $num1;
    else
       $largest = $num3;
else
    if ($num2 > $num3)
       $largest = $num2;
    else
       $largest = $num3;

echo "<h1>the largest is $largest</h1>";

if ($num1 <= $num2 and $num1 <= $num3)
    $smallest = $num1; 
elseif ($num2 <= $num3)
    $smallest = $num2; 
else
    $smallest = $num3; 

echo "<h1>the smallest is $smallest</h1>";

?>

<form action="if3.html">
   <input type="submit" value="back to form">
</form>
