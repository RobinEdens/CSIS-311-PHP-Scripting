<?php

   $months = array("January", "February", "March", "April", "May",
                   "June", "July", "August", "September",
                   "October", "November", "December");

   extract($_REQUEST);
   if ($button == NULL || $button == "back to form")
      displayform($months);
   else
   {
      displayItem($month,$months);
      back2form();
   }

// ***********************************************************
// FUNCTIONS

function displayform($months)
{
   echo "<form>";
   selectArray("month",$months);
   echo <<< HERE
   <input type="submit" name="button" value="go">
HERE;
   echo "</form>";
}

function selectArray($name,$theArray)
{
   echo "<select name=\"$name\">";
   for ($i=0; $i<count($theArray); $i++)
      echo "<option value=\"$i\">$theArray[$i]</option>";
   echo "</select>";
}

function back2form()
{
   echo <<< HERE
   <form>
      <input type="submit" name="$button" value="back to form">
   </form>
HERE;
}

function displayItem($index,$array)
{
   echo "<h2>item index: $index; item value: $array[$index]</h2>";
}

?>
