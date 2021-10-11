<?php

   $output = fopen("whatever","w");
   fwrite($output,"hello there\n");
   fclose($output);

   $output = fopen("whatever","a");
   fwrite($output,"how are you?\n");
   fclose($output);

?>