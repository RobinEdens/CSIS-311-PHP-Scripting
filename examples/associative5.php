<form>
<?php
extract($_REQUEST);
include("teams.php");

echo "<h1>American League Teams</h1>";
if ($button==NULL or $button=="again")
   displayForm($teams);
elseif ($button=="go")
   displayTeam($teams,$team);


// functions
function displayForm($teams)
{
   echo "<h2>Team ";
   selectAssoc("team",$teams);
   echo "</h2>";
   echo "<input type='submit' name='button' value='go'>";
}

function displayTeam($teams,$team)
{
   echo "<h2>$team " . $teams[$team] . "</h2>";
   echo "<input type='submit' name='button' value='again'>";
}

// this function will create a select input structure with
// the associative array content in the drop down box and
// the index as the value
function selectAssoc($name,$array)
{
   echo "<select name=\"$name\">";
   foreach ($array as $index=>$value)
      echo "<option value=\"$index\">" .  $value . "</option>";
   echo "</select>";
}


?>
</form>
<form action=".">
   <input type="submit" value="back to directory">
</form>
