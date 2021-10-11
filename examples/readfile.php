<?php

readfile("datafile");

echo "<h3>----------------------</h3>";

$myfile = fopen("datafile","r") or die("unable to open");
$name = fgets($myfile);
$position = fgets($myfile);
$department = fgets($myfile);
$university = fgets($myfile);
echo "<h3>name: $name</h3>";
echo "<h3>position: $position</h3>";
echo "<h3>department: $department</h3>";
echo "<h3>university: $university</h3>";
fclose($myfile);

echo "<h3>----------------------</h3>";

dumpfile("datafile");

function dumpfile($filename)
{
   $myfile = fopen("$filename","r") or die("unable to open");

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