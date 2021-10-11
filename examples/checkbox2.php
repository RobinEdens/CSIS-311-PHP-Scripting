<?php

$red = $_REQUEST['red'];
$green = $_REQUEST['green'];
$blue = $_REQUEST['blue'];
$yellow = $_REQUEST['yellow'];
$purple = $_REQUEST['purple'];

if ($red=="on")
   echo "<h1>do some red stuff</h1>";
if ($green=="on")
   echo "<h1>do some green stuff</h1>";
if ($blue=="on")
   echo "<h1>do some blue stuff</h1>";
if ($yellow=="on")
   echo "<h1>do some yellow stuff</h1>";
if ($purple=="on")
   echo "<h1>do some purple stuff</h1>";

echo "------------------------<br/>";

if (isset($red))
   echo "<h1>do some red stuff</h1>";
if (isset($green))
   echo "<h1>do some green stuff</h1>";
if (isset($blue))
   echo "<h1>do some blue stuff</h1>";
if (isset($yellow))
   echo "<h1>do some yellow stuff</h1>";
if (isset($purple))
   echo "<h1>do some purple stuff</h1>";

echo "------------------------<br/>";

if (isset($_REQUEST['red']))
   echo "<h1>do some red stuff</h1>";
if (isset($_REQUEST['green']))
   echo "<h1>do some green stuff</h1>";
if (isset($_REQUEST['blue']))
   echo "<h1>do some blue stuff</h1>";
if (isset($_REQUEST['yellow']))
   echo "<h1>do some yellow stuff</h1>";
if (isset($_REQUEST['purple']))
   echo "<h1>do some purple stuff</h1>";

echo "------------------------<br/>";

?>

<form action="checkbox2.html">
   <input type="submit" value="back to form">
</form>
