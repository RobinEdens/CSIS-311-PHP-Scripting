<?php

extract($_REQUEST);
echo "<h1>the largest is " . biggest($num1,$num2,$num3) . "</h1>";
echo "<h1>the smallest is " . smallest($num1,$num2,$num3) . "</h1>";
back_to_form();



function biggest($num1,$num2,$num3)
{
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
return $largest;
}

function smallest($num1,$num2,$num3)
{
if ($num1 <= $num2 and $num1 <= $num3)
    $smallest = $num1; 
elseif ($num2 <= $num3)
    $smallest = $num2; 
else
    $smallest = $num3; 
return $smallest;
}

function back_to_form()
{
echo <<< HERE
<form action="func2.html">
   <input type="submit" value="back to form">
</form>
HERE;
}

?>

