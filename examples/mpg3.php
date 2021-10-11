<form>
<?php
   extract($_REQUEST);
   if ($button==NULL or $button=="clear")
   {
      $miles=NULL;
      $gallons=NULL;
   }
   echo <<< HERE
         <h2>miles <input type="text" name="miles" value="$miles"></h2>
         <h2>gallons <input type="text" name="gallons" value="$gallons"></h2>
         <input type="submit" name="button" value="calculate">
         <input type="submit" name="button" value="clear">
HERE;
   
   if ($button == "calculate")
   {
      $mpg = $miles/$gallons;
      echo "<h2>$mpg MPG</h2>";
   }

?>
</form>
