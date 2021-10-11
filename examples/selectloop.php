<?php
   extract($_REQUEST);
   if ($button == NULL || $button == "back to form")
      displayform();
   else
   {
      displayNum($num);
      back2form();
   }

// ***********************************************************
// FUNCTIONS

function displayform()
{
   echo "<form>";
   echo "<select name=\"num\">";
   for ($i=1; $i<=1000; $i++)
      echo "<option>$i</option>";
   echo "</select>";
   echo <<< HERE
   <input type="submit" name="button" value="go">
HERE;
   echo "</form>";
}

function back2form()
{
   echo <<< HERE
   <form>
      <input type="submit" name="$button" value="back to form">
   </form>
HERE;
}

function displayNum($num)
{
   echo "<h2>number selected: $num</h2>";
}

?>
