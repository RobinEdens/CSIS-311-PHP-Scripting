<form>
<?php
extract($_REQUEST);
include("teams.php");

if ($button==NULL or $button=="reset")
   $count=0;
elseif ($button=="next")
   $count++;

echo "<h1>American League Teams</h1>";
displayNextTeam($teams,$count);
displayButtons();
passData($count);



// functions
function displayNextTeam($teams,$count)
{
   if ($count < count($teams))
   {
      $team = nextTeam($teams,$count);
      echo "<h2>$team</h2>";
   }
   else
      echo "<h2>Done</h2>";
}

function nextTeam($teams,$count)
{
   reset($teams);
// discard $count teams
   for ($i=0; $i<$count; $i++)
      next($teams);
   return key($teams) . " " . current($teams);
}

function displayButtons()
{
   echo <<< HTML
      <input type="submit" name="button" value="next">
      <input type="submit" name="button" value="reset">
HTML;
}

function passData($count)
{
   echo <<< HTML
      <input type="hidden" name="count" value="$count">
HTML;
}

?>
</form>
<form action=".">
   <input type="submit" value="back to directory">
</form>
