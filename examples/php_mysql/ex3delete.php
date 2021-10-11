<html>
<head>
<title>DB Example</title>
</head>
<body>
<?php
extract($_POST);

if ($button == "delete entry") // prompt for name and owner
{

   echo <<< HERE
   <form method="post" action="ex3delete.php">
   <h3>Name <input type="text" name="name" autocomplete="off"></h3>
   <h3>Owner <input type="text" name="owner" autocomplete="off"></h3>
   <input type="submit" name="button" value="delete">
   <input type="hidden" name="username" value="$username">
   <input type="hidden" name="password" value="$password">
   <input type="hidden" name="dbname" value="$dbname">
   </form>
HERE;
}
else // attempt to delete
{
   if (!( $database=mysqli_connect("localhost",$username,$password,$dbname)))
      die( "Could not connect to database" );

   $query = "DELETE from pet where name = '$name' and owner = '$owner'";
   echo "<h4>query: $query</h4>"; 
   if ( !( $result = mysqli_query( $database, $query) ) ) {
      echo "Could not execute query! <br />";
      die( mysqli_error() );
   }
   if ( mysqli_affected_rows($database) > 0 ) 
      echo "<h3>$name deleted from pet database.</h3>";
   else
      echo "<h3>$name with owner $owner not in pet database.</h3>";
   mysqli_close($database);
   echo <<< HERE
   <form method="post" action="example3.php">
   <input type="submit" name="button" value="return">
   <input type="hidden" name="username" value="$username">
   <input type="hidden" name="password" value="$password">
   <input type="hidden" name="dbname" value="$dbname">
   </form>
HERE;
}

?>
</body>
</html>
