<form>
<style><?php include "style.css";?></style>
<?php
extract($_REQUEST);
echo "<html>
	<body>
	<h1> Assignment 2c </h1>
	<p> This assignment is a basic PHP script that will grab the current time, formatted
	based on specifications in the assignment, alongside taking two variables inputed
	by the user and outputing the sum of them. Adjustments made to make sure the autograder
	sum will also print without button submit.	
	<br><br>";

echo date("l, F jS, Y, g A");

echo "<br><br>
	<p> Please enter two numbers to be added
	<h3> A <input type='text' name='a' value='$a'</h3>
	<h3> B <input type='text' name='b' value='$b'</h3>
	<input type='submit' name='button' value='Sum'>";

if ($button == "Sum") {
	$sum = $a + $b;
	echo "<h3>The sum is $sum</h3>";
} else {
	$sum = $a + $b;
	echo "<br><br>
		<p> The sum of the two numbers passed via the autograder is $sum";
}

echo "</body></html>";
?>
</form>
