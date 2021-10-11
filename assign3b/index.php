<?php
session_start();
extract($_REQUEST);
extract($_SESSION);
if ($button == NULL) {
	// echo "first run";
	$_SESSION['log'] = array();
	$_SESSION['count'] = 0;
}

echo "
<html>
<head>
	<link rel='stylesheet' href='style.css'>
	<title>Weather Unit Conversion (Assignment 3B)</title>
</head>
<body>
<h1>Weather Converter (Fahrenheit to Celcius)</h1>


<form action='unita.php'>
	<input type='hidden' name='count' value=$count'>
	<input type='text' name='userInput'>
	<button type='submit' name='convert' value='convert'>
		Convert Fahrenheit to Celsius</button>
</form>

<form action='unitb.php'> 
	<input type='hidden' name='count' value=$count'>
	<input type 'text' name='userInput'>
	<button type='submit' name='convert' value='convert'>
		Convert Celsius to Fahrenheit</button>
	
</form><HR>";
highlight_file("index.php");
echo "</body></html>";

?>
