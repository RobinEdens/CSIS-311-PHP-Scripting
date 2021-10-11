<style><?php include  "style.css"; ?></style>
<?php
$temp = $_REQUEST['userInput'];
$celcius = ($temp -32) / 1.8;
echo "<h1> The temperature $temp in Celcius is $celcius</h1>";
?>

<form action="unita.html">
	<button type="submit">Convert another</button>
</form>
