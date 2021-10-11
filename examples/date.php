<?php

echo "<h3>" . date("l, F jS, Y") . "</h3>";

$month = 12;
$day = 31;
$year = 2017;

$newyearseve = mktime(0,0,0,$month,$day,$year);
echo "<h3>" . date("l, F jS, Y",$newyearseve) . "</h3>";

$today = time();
echo "<h3>" . date("l, F jS, Y",$today) . "</h3>";

$daystring = "$month/$day/$year";
$ts = strtotime($daystring);
echo "<h3>" . date("l, F jS, Y",$ts) . "</h3>";

$month = 2;
$day = 16;
$year = 2017;

$nextDay = mktime(0,0,0,$month,$day,$year);
$days = floor(($nextDay-$today)/86400)+1;

echo "<h3>number of days until $month/$day/$year is $days</h3>";

$month = 2;
$day = 29;
$year = 2017;

if (checkdate($month,$day,$year))
   echo "<h3>good!</h3>";
else
   echo "<h3>bad date!</h3>";

?>
