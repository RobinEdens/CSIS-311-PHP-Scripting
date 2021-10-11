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
";
$cmd = $_REQUEST['op'];
$tmpstr = $_REQUEST['data'];
if ($cmd == 'write') {
	write_file("file", $tmpstr);

} else if ($cmd == 'append') {
	append_file("file", $tmpstr);
}

else if ($cmd  == 'read') {
	read_file('file');
} else {
	echo "<h3>No input received by autograder</h3><br>";
}
highlight_file("index.php");

echo "
</body>
</html>";
?>
