<?php
   extract($_REQUEST);
   if ($button == NULL || $button == "back to form")
      displayform();
   else
   {
      whileloop($first,$last);
      dowhileloop($first,$last);
      forloop($first,$last);
      back2form();
   }

// ***********************************************************
// FUNCTIONS

function displayform()
{
   echo <<< HERE
      <form>
         <h2>First value
            <input type="text" name="first" autocomplete="off">
         </h2>
         <h2>Last value
            <input type="text" name="last" autocomplete="off">
         </h2>
         <input type="submit" name="button" value="display">
      </form>
HERE;
}

function back2form()
{
   echo <<< HERE
   <form>
      <input type="submit" name="$button" value="back to form">
   </form>
HERE;
}

function whileloop($first,$last)
{
   echo "<h2>Using a while loop: ";
   $num=$first;
   while ($num<=$last)
   {
      echo "$num ";
      $num++;
   }
   echo "</h2>";
}

function dowhileloop($first,$last)
{
   echo "<h2>Using a do while loop: ";
   $num=$first;
   do
   {
      echo "$num ";
      $num++;
   }
   while ($num<=$last);
   echo "</h2>";
}

function forloop($first,$last)
{
   echo "<h2>Using a for loop: ";
   for ($num=$first; $num<=$last; $num++)
      echo "$num ";
   echo "</h2>";
}

?>
