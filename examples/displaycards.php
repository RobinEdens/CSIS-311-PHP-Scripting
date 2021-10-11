<img src="S13.jpg" width="100">
<br/>
<?php
   echo <<< HERE
      <img src="H1.jpg" width="100">
      <br/>
HERE;
   for ($i=1; $i<=13; $i++)
      echo <<< HERE
         <img src="C$i.jpg" width="50">
HERE;

echo "<br/>";
$suits = array("S","D","C","H");
foreach($suits as $suit)
{
   for ($i=1; $i<=13; $i++)
      echo <<< HERE
         <img src="$suit$i.jpg" width="50">
HERE;
   echo "<br/>";
}
?>
