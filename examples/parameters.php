<?php

$num1 = 5;
$num2 = 7;
func1($num1,$num2);
echo "<h1>\$num1 is $num1 and \$num2 is $num2</h1>";
func2($num1,$num2);
echo "<h1>\$num1 is $num1 and \$num2 is $num2</h1>";

// $a and $b are value parameters
// changing $a and $b has no effect on the calling parameters
   function func1($a,$b)
   {
      $a=70;
      $b=43;
   }
// $a and $b are reference parameters
// changing $a and $b has changes the calling parameters
   function func2(&$a,&$b)
   {
      $a=70;
      $b=43;
   }
?>