<?php
   $teams = array("Baltimore" => "Orioles",
                  "Boston" => "Red Sox",
                  "Chicago" => "White Sox",
                  "Cleveland" => "Indians",
                  "Detroit" => "Tigers",
                  "Houston" => "Astros",
                  "Kansas City" => "Royals",
                  "Los Angeles" => "Angels",
                  "Minnesota" => "Twins",
                  "New York" => "Yankees",
                  "Oakland" => "Athletics",
                  "Seattle" => "Mariners",
                  "Tampa Bay" => "Rays",
                  "Texas" => "Rangers",
                  "Toronto" => "Blue Jays");
                  
writeAssoc("baseball",$teams);
dumpfile("baseball");

function writeAssoc($filename,$array)
{
   $f = fopen($filename,"w");
   foreach ($array as $index=>$content)
      fwrite($f,"$index $content\n");
   fclose($f);
}
function dumpfile($filename)
{
   $myfile = @fopen("$filename","r") or die("unable to open");

   echo "<h3>";
   $line = fgets($myfile);
   while (!feof($myfile))
   {
      echo "$line<br />";
      $line = fgets($myfile);
   }
   fclose($myfile);
   echo "<h3>";

}

?>
