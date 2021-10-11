<?php
extract($_GET);
echo "<form>";
if ($button==NULL || $button=="reshuffle")
{
   echo "<img src=\"back.jpg\">";
   if ($button == NULL)
      $cards = buildDeck();
   shuffleCards($cards);
   $cardNum = 0;
}
elseif ($button=="next" && $cardNum < 52)
{
   if ($cardNum == 51) // empty pile
      echo "<img src=\"blank.jpg\">";
   else
      echo "<img src=\"back.jpg\">";
   echo "<img src=\"$cards[$cardNum].jpg\">";
   $cardNum++;
}
print <<< HERE
   <br/>
   <input type="submit" name="button" value="next">
   <input type="submit" name="button" value="reshuffle">
HERE;
passData($cards,$cardNum);
echo "</form>";


// ********************** FUNCTIONS ***************************

function passData($cards,$cardNum)
{
   echo "<input type=\"hidden\" name=\"cardNum\" value=\"$cardNum\">";
   for ($i=0; $i<52; $i++)
      echo "<input type=\"hidden\" name=\"cards[$i]\" value=\"$cards[$i]\">";
}

function buildDeck()
{
   $suits = array("H","D","S","C");
   $num=0;
   foreach ($suits as $suit)
   {
      for ($j=1; $j<=13; $j++)
         $cards[$num++] = "$suit$j";
   }
   return $cards;
}


function shuffleCards(&$cards)
{
   for ($i=1; $i<1000; $i++)
   {
      $num1 = rand(0,51);
      $num2 = rand(0,51);
      $temp = $cards[$num1];
      $cards[$num1] = $cards[$num2];
      $cards[$num2] = $temp;
   }
}


?>


