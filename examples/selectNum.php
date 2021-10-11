<?php
   extract($_REQUEST);
   if ($button == NULL || $button == "back to form")
      displayform();
   else
   {
      displayNum($num1);
      displayNum($num2);
      displayNum($num3);
      displayNum($num4);
      back2form();
   }

// ***********************************************************
// FUNCTIONS

function displayform()
{
   echo "<form>";
   selectNum("num1",1,100);
   selectNum("num2",101,200);
   selectNum("num3",201,300);
   selectNum("num4",301,400);
   echo <<< HERE
   <input type="submit" name="button" value="go">
HERE;
   echo "</form>";
}

function selectNum($name,$first,$last)
{
   echo "<select name=\"$name\">";
   for ($i=$first; $i<=$last; $i++)
      echo "<option>$i</option>";
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

function displayNum($num)
{
   echo "<h2>number selected: $num</h2>";
}

?>
