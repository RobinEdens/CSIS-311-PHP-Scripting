<?php
session_start();

function convertPrint($temp, $unit, $convert) {
	$_SESSION['count']++;
	if (strcmp($unit, "Celcius") == 0) {
		$form = "unitb.php";
	} else {
		$form = "unita.php";
	}
	
	$_SESSION['log'][] =  array (
		$unit,
		$convert,
		date("h:i:sa")
		);

	echo 
	"<h1> The temperature $temp in $unit is $convert</h1>
	<form action=$form>
		<input type='text' value=$convert name='userInput'>
		<button type='submit' name = 'convert' value='convert'>
			Convert back</button>
	</form>
	<br><br>
	<form action='index.php'>
		<button type='submit' name='button' value ='Back'>
			Go Back</button>
	</form>";
	$i = 0;
	echo "<form action='$form'>";
	foreach ($_SESSION['log'] as $index1) {
		echo "<input type='radio' id='$i' name='index' value='$index1[1]'>
			<label for='$i'";
		$i++;
		echo">$i: $index1[0] - $index1[1] - Timestamp: $index1[2]";
		
		echo "</label><br>";
	}
	echo " <button type='submit' name='btnIndex' value='btnIndex'>
	Convert selected again</button>
	</form><HR>convert.php<br><br>";
	highlight_file("convert.php");

	echo "<HR>";
	if (strcmp($unit, "Celcius") == 0) {
		echo "unita.php<br><br>";
		highlight_file("unita.php");
	} else {
		echo "unitb.php<br><br>";
		highlight_file("unitb.php");
	}
}
?>
