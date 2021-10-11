<h1>Dice Program</h1>
<form>
<?php
   extract($_REQUEST);
   if ($button == NULL or $button == "shake dice")
      $dice = shakeDice(5);
   displayDice($dice);
   displayButtons();
   if ($button=="sum the dice")
      echo "<h2>the sum is " . sum($dice) . "</h2>";
   elseif ($button=="biggest die")
      echo "<h2>the biggest is " . biggest($dice) . "</h2>";
   passDice($dice);
   
function displayButtons()
{
   echo <<< HERE
      <input type="submit" name="button" value="shake dice">
      <input type="submit" name="button" value="sum the dice">
      <input type="submit" name="button" value="biggest die">
HERE;
}

function biggest($dice)
{
   $biggest = $dice[0];
   for ($i=1; $i<count($dice); $i++)
      if ($dice[$i] > $biggest)
         $biggest = $dice[$i];
   return $biggest;
}


function sum($dice)
{
   $sum = 0;
   foreach ($dice as $die)
      $sum += $die;
   return $sum;
}

function passDice($dice)
{
   for ($i=0; $i<count($dice); $i++)
      echo <<< HERE
         <input type="hidden" name="dice[$i]" value="$dice[$i]">
HERE;
}

function shakeDice($n)
{
   for ($i=0; $i<$n; $i++)
      $nums[$i] = rand(1,6);
   return $nums;
}

function displayDice($array)
{
//   for ($i=0; $i<count($array); $i++)
/*      echo <<< HERE
         <img src="die$array[$i]">
HERE;*/
   foreach ($array as $die)
      echo <<< HERE
         <img src="die$die.jpg">
HERE;
   echo "</br>";
}

?>
</form>
