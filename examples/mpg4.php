<form>
<?php
   extract($_REQUEST);
   if ($button==NULL or $button=="clear summary")
   {
      $totalmiles = 0;
      $totalgallons = 0;
      $count = 0;
      $miles=NULL;
      $gallons=NULL;
   }
   elseif ($button=="clear form")
   {
      $miles=NULL;
      $gallons=NULL;
   }
   echo <<< HERE
         <h2>miles <input type="text" name="miles" value="$miles"></h2>
         <h2>gallons <input type="text" name="gallons" value="$gallons"></h2>
         <input type="submit" name="button" value="calculate">
         <input type="submit" name="button" value="clear form">
         <input type="submit" name="button" value="clear summary">
HERE;
   
   if ($button == "calculate")
   {
      $mpg = $miles/$gallons;
      $totalmiles += $miles;
      $totalgallons += $gallons;
      $count++;
      $totalMPG = $totalmiles/$totalgallons;
      echo <<< HERE
         <h2>$mpg MPG</h2>
         <hr>SUMMARY
         <h4>number of entries: $count</h4>
         <h4>total miles: $totalmiles</h4>
         <h4>total gallons: $totalgallons</h4>
         <h4>total MPG: $totalMPG</h4>
HERE;
   }
   
   echo <<< HERE
      <input type="hidden" name="count" value="$count">
      <input type="hidden" name="totalmiles" value="$totalmiles">
      <input type="hidden" name="totalgallons" value="$totalgallons">
HERE;

?>
</form>
