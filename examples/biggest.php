<form>
<?php
   extract($_REQUEST);

   if ($button==NULL or $button=="start over")
   {
      $count=0;
      $biggest=NULL;
   }
   elseif ($button=="enter")
   {
      $count++;
      if ($num > $biggest)
         $biggest = $num;
   }

   echo <<< HERE
      <h2>Number 
      <input type="text" name="num" autocomplete="off"></h2>
      <input type="submit" name="button" value="enter">
      <input type="submit" name="button" value="start over">
      <h3>count: $count</h3>
      <h3>biggest: $biggest</h3>
      <input type="hidden" name="count" value="$count">
      <input type="hidden" name="biggest" value="$biggest">
HERE;
?>
</form>