<style><?php include "style.css"; ?></style>
<?php
include 'convert.php';
extract($_REQUEST);
if ($_GET['index']) {
	$temp = $_REQUEST['index'];
} else {
	$temp = $_REQUEST['userInput'];
}
$fahrenheit = ($temp * 1.8) + 32;
convertPrint($temp, 'Fahrenheit', $fahrenheit);
?>
