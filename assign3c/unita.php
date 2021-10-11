<style><?php include  "style.css"; ?></style>
<?php
include 'convert.php';
extract($_REQUEST);
if ($_GET['index']) {
	$temp = $_REQUEST['index'];
} else {
	$temp = $_REQUEST['userInput'];
}
$celcius = ($temp -32) / 1.8;
convertPrint($temp, "Celcius", $celcius);
?>
