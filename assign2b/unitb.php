<style><?php include "style.css"; ?></style>
<?php
$temp = $_REQUEST['userInput'];
$fahrenheit = ($temp * 1.8) + 32;
echo "<h1> The temperature $temp in Fahrenheit is $fahrenheit</h1>";
?>

<form action="unitb.html">
	<button type"submit">Convert another</button>
</form>
