<?php

function write_file($file, $input) {
	$openedfile = fopen("$file", "w");
	fwrite($openedfile, $input);
	fclose($openedfile);
}

function append_file($file, $input) {
	$openedfile = fopen("$file", "a");
	fwrite($openedfile, $input);
	fclose($openedfile);
}

function read_file($file) {
	$openedfile = @fopen("$filename", "r") or die("Cannot open");
	echo "<h3>";
	$next = fgets($openedfile);
	while (!feof($openedfile)) {
		echo "$next<br />";
		$next = fgets($openedfile);
	}
	fclose($openedfile);
	echo "<h3>";
}

?>
