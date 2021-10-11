<html>
<head>
<title>DB Example</title>
</head>
<body>
<form action=".">
   <input type="submit" value="done">
</form>
<?php
extract($_POST);
$conn = mysqli_connect("localhost",$username,$password,$dbname);
$sql = "select * from pet";
$result = mysqli_query($conn,$sql);

// output the field names
echo "<h3>Field Names in the pet table</h3>";
while ($field = mysqli_fetch_field($result))
{
   echo "$field->name<br>\n";
}

echo "<br><br>";

// output the records
echo "<h3>Records in the pet table</h3>";
echo "------------------<br>";
while ($row = mysqli_fetch_assoc($result))
{
   foreach ($row as $col=>$val)
   {
      echo "$col - $val<br>\n";
   }
   echo "------------------<br>";
}
mysqli_close($conn);
?>
<form action=".">
   <input type="submit" value="done">
</form>

</body>
</html>
