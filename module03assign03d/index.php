<?php
include 'file.php';
extract ($_REQUEST);
echo "
<html>
<head>
	<link rel='stylesheet' href='style.css'>
	<title>Assignment 3D: File IO</title>
</head>
<body>
<h1>Assignment 3d: File IO</h1>
<br>
<p>This assignment is a basic file IO assignment that will take an argument passed via the autograde via url
and parse that command to either write to file, read from the existing file, or append the file. 
<br><br>
<input type='hidden' name='op' value='$op'>
<input type='hidden' name='data' value='$data'>
";

$op = $_REQUEST['op'];
$data = $_REQUEST['data'];
if ($op == 'write') {
	write_file("file", $data);
	echo "File written to<br>";

} else if ($op == 'append') {
	append_file("file", $data);
	echo "File appended<br>";
}

else if ($op  == 'read') {
	read_file('file');

	echo "End of file<br>";
} else {
	echo "<h3>No input received by autograder</h3><br>";
}
highlight_file("index.php");
highlight_file("file.php");

echo "
</body>
</html>";
?>
