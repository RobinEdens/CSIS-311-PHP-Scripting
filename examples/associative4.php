<form>
<?php
   include("teams.php");
   extract($_REQUEST);
   echo "<h1>American League Baseball Teams</h1>";
   if ($button==NULL or $button=="again")
      displayForm();
   else
      displayTeam($teams,$team);
      
// functions
function displayTeam($teams,$team)
{
   if ($teams[$team])
   {
      $teamname = $team . " " . $teams[$team];
      echo "<h3>$teamname</h3>";
   }
   else
      echo "<h3>$team is not an American League team</h3>";
   echo <<< HTML
      <input type="submit" name="button" value="again">
HTML;
}

function displayForm()
{
   echo <<< HTML
      <h3>Name
      <input type="text" name="team" autocomplete="off">
      </h3>
      <input type="submit" name="button" value="go">
HTML;
}

?>
</form>
<form action=".">
   <input type="submit" value="back to directory">
</form>
