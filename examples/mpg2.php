<form>
<?php
   extract($_REQUEST);
   
   if ($button == "calculate")
   {
      $mpg = $miles/$gallons;
      echo "<h2>$miles miles and $gallons gallons is $mpg MPG</h2>";
      echo <<< HERE
         <input type="submit" name="button" value="back to form">
HERE;
   }
   else
   {
      echo <<< HERE
            <h2>miles <input type="text" name="miles"></h2>
            <h2>gallons <input type="text" name="gallons"></h2>
            <input type="submit" name="button" value="calculate">
HERE;
   }


?>
</form>
