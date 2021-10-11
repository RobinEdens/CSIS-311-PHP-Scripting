<?php
   extract($_REQUEST);

   if ($button==NULL or $button=="start over")
      $number = 0;
   else
      $number++;

   echo <<< HERE
      <h1>counter: $number</h1>
      <form action="persistent.php">
        <input type="hidden" name="number" value=$number>
        <input type="submit" name="button" value="add one">
        <input type="submit" name="button" value="start over">
      <form>
HERE;

?>
