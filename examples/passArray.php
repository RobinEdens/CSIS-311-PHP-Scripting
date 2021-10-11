<form>
<?php
extract($_REQUEST);
// prep
if ($button=="go" or $button=="new numbers")
   $numbers=getRandoms($howmany,$smallest,$largest);
elseif ($button=="double them")
   double($numbers);
elseif ($button=="halve them")
   halve($numbers);

// display and pass 
if ($button==NULL or $button=="start over")
   infoPage();
else
{
   arrayPage($numbers);
   passData($numbers,$howmany,$smallest,$largest);
}

function passData($numbers,$howmany,$smallest,$largest)
{
   echo <<< HERE
      <input type="hidden" name="howmany" value="$howmany">
      <input type="hidden" name="smallest" value="$smallest">
      <input type="hidden" name="largest" value="$largest">
HERE;
   for ($i=0; $i<count($numbers); $i++)
      echo <<< HERE
      <input type="hidden" name="numbers[$i]" value="$numbers[$i]">
HERE;
}

function infoPage()
{
   echo <<< HERE
      <h1>Array Size <input type="text" name="howmany"></h1>
      <h1>Smallest <input type="text" name="smallest"></h1>
      <h1>Largest <input type="text" name="largest"></h1>
      <input type="submit" name="button" value="go">
HERE;
}

function double(&$numbers)
{
   for ($i=0; $i<count($numbers); $i++)
      $numbers[$i] *= 2;
}

function halve(&$numbers)
{
   for ($i=0; $i<count($numbers); $i++)
      $numbers[$i] /= 2;
}

function getRandoms($howmany,$first,$last)
{
   for ($i=0; $i<$howmany; $i++)
      $nums[$i]=rand($first,$last);
   return $nums;
}

function arrayPage($numbs)
{
   echo "<h1>";
   for ($i=0; $i<count($numbs); $i++)
      echo "$numbs[$i] ";
   echo "</h1>";
   echo <<< HERE
      <input type="submit" name="button" value="new numbers">
      <input type="submit" name="button" value="double them">
      <input type="submit" name="button" value="halve them">
      <input type="submit" name="button" value="start over">
HERE;
}



?>
</form>