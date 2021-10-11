<form>
<?php
extract($_REQUEST);
include("teams.php");

if ($button==NULL or $button=="reset")
{
   $used=NULL;
   $count=0;
}
elseif ($button=="next")
   $count++;

echo "<h1>American League Teams in Random Order</h1>";
displayNextTeam($teams,$count,$used);
displayButtons();
dumpArray($teams,$used);
passData($teams,$count,$used);



// functions
function displayNextTeam($teams,$count,&$used)
{
   if ($count < count($teams))
   {
      $team = nextTeam($teams,$used);
      echo "<h2>$team $teams[$team]</h2>";
   }
   else
      echo "<h2>Done</h2>";
}

function nextTeam($teams,&$used)
{
   do
      $num = rand(0,count($teams)-1);
   while ($used[$num]);
   $used[$num] = true;
   reset($teams);
   for ($i=0; $i<$num; $i++)
      next($teams);
   return key($teams);
}

function displayButtons()
{
   echo <<< HTML
      <input type="submit" name="button" value="next">
      <input type="submit" name="button" value="reset">
HTML;
}

function passData($teams,$count,$used)
{
   echo "<input type='hidden' name='count' value='$count'>";
   for ($i=0; $i<count($teams); $i++)
      echo "<input type='hidden' name='used[$i]' value='$used[$i]'>";
}

function dumpArray($teams,$used)
{
   echo "</br></br>";
   reset($teams);
   for ($i=0; $i<count($teams); $i++)
   {
      if ($used[$i])
         echo "<font size='+1'><b>" . key($teams) . " " . current($teams) 
              . "</b></font></br>";
      else
         echo key($teams) . " " . current($teams) . "</br>";
      next($teams);
   }
}
?>
</form>
<form action=".">
   <input type="submit" value="back to directory">
</form>
