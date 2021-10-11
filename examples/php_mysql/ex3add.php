<html>
<head>
<title>DB Example</title>
</head>
<body>
<?php
extract($_POST);

if ($button == "add entry") // prompt for the information to add
{
   echo <<< HERE
   <form method="post" action="ex3add.php">
   <h3>Name <input type="text" name="name" autocomplete="off"></h3>
   <h3>Owner <input type="text" name="owner" autocomplete="off"></h3>
   <h3>Species <input type="text" name="species" autocomplete="off"></h3>
   <h3>Sex <input type="text" name="sex" autocomplete="off"></h3>
   <h3>Birth <input type="text" name="birth" autocomplete="off"> (yyyy-mm-dd)</h3>
   <h3>Death <input type="text" name="death" autocomplete="off"></h3>
   <input type="submit" name="button" value="add new entry">
   <input type="hidden" name="username" value="$username">
   <input type="hidden" name="password" value="$password">
   <input type="hidden" name="dbname" value="$dbname">
   </form>
HERE;
}
else // add the new entry to the pet table in the database
{
   if (!( $database = mysqli_connect( "localhost", $username, $password,$dbname)))
      die( "Could not connect to database" );

   if ($death != NULL)
   {
      $query = "INSERT INTO pet(name,owner,species,sex,birth,death) VALUES (";
      $query = $query . "'$name','$owner','$species','$sex','$birth','$death')";
   }
   else // if $death is NULL, do not include it or the date becomes 0000-00-00 
   {
      $query = "INSERT INTO pet(name,owner,species,sex,birth) VALUES (";
      $query = $query . "'$name','$owner','$species','$sex','$birth')";
   }
   echo "<h4>query: $query</h4>"; 
   if ( !( $result = mysqli_query( $database,$query ) ) ) {
      echo "Could not execute query! <br />";
      die( mysqli_error() );
   }
   else 
      echo "$name added to pet database.";
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
