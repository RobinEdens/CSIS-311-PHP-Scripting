<html>
<head>
<title>DB Example</title>
</head>
<body>
<?php
extract($_POST);

if ($button == "query database")
{
   $conn = mysqli_connect("localhost",$username,$password,$dbname);

   echo <<< HERE
      <form method="post" action="ex3query.php">
      <h3>pet table query</h3>
      <table>
      <tr>
      <th>Fields to Display</th>
      <th>Owners</th>
      <th>Species</th>
      </tr>
      <tr>
      <td>
HERE;

   // get the field names from the database and put them in checkboxes
   // Note that I made this generic to work with any table in a DB.
   // You could write it for a specific DB by just using known names.
   $sql = "select * from pet";
   $result = mysqli_query($conn,$sql);
   while ($field = mysqli_fetch_field($result))
   {
      $fieldname = $field->name;
      echo "<input type=\"checkbox\" name=\"$fieldname\" CHECKED>$fieldname";
      echo "<br>";
   }
   echo <<< HERE
   </td>
   <td valign="top">
HERE;

   // get the owners (no duplicates) from the DB and display as radio buttons
   // Note that I made this generic to work with any table in a DB.
   // You could write it for a specific DB by just using known names.
   $sql = "select distinct owner from pet";
   $result = mysqli_query($conn,$sql);
   echo "<input type=\"radio\" name=\"theowner\" value=\"all owners\" CHECKED>
           all owners<br>";
   while ($row = mysqli_fetch_assoc($result))
   {
      $owner = $row["owner"];
      echo "<input type=\"radio\" name=\"theowner\" value=\"$owner\">$owner";
      echo "<br>";
   }
   echo <<< HERE
   </td>
   <td valign="top">
HERE;

   // get the species (no duplicates) from the DB and display as drop down box
   // Note that I made this generic to work with any table in a DB.
   // You could write it for a specific DB by just using known names.
   $sql = "select distinct species from pet";
   $result = mysqli_query($conn,$sql);
   echo "<select name = \"thespecies\">";
   echo "<option value = \"all species\">all species</option>";
   while ($row = mysqli_fetch_assoc($result))
   {
      $species = $row["species"];
      echo "<option value = \"$species\">$species</option>";
   }
   echo "</select>";
   mysqli_close($conn);

   echo <<< HERE
   </td>
   </tr>
   </table>
   <br>
   <input type="submit" name="button" value="send query">

   <input type="hidden" name="username" value="$username">
   <input type="hidden" name="password" value="$password">
   <input type="hidden" name="dbname" value="$dbname">
   </form>
HERE;
}
elseif ($button == "send query")
{
   // Get the fields to be displayed from the checkboxes.
   $fieldnames = NULL;
   $conn = mysqli_connect("localhost",$username,$password,$dbname);
   $sql = "select * from pet";
   $result = mysqli_query($conn,$sql);
   while ($row = mysqli_fetch_field($result))
   {
      if (isset($_REQUEST[$row->name]))
         $fieldnames[] = $row->name;
   }
   
   // Start building the query
   if (mysqli_num_fields($result) == count($fieldnames)) // all the fields
      $sql = "select * from pet";
   else
   {
      $thefields = implode(",",$fieldnames);
      $sql = "select " . $thefields . " from pet";
   }

   // Add the owner to the query.
   if ($theowner != "all owners")
      $sql = $sql . " where owner = '" . $theowner . "'";

   // Add the species to the query.
   // Note: since "and" can only be used when there is more than one
   // condition, I had to check whether the owner was added previously.
   if ($thespecies != "all species")
      if ($theowner != "all owners")
         $sql = $sql . " and species = '" . $thespecies . "'";
      else
         $sql = $sql . " where species = '" . $thespecies . "'";

   // dump out the query for debugging purposes
   echo "<p><b>the query (output for debugging purposes only, remove
          when program is working)</b>
          <br><b>$sql</b></p>";

   // send the query to the database
   $result = mysqli_query($conn,$sql);
   mysqli_close($conn);
   printtable("Query Results",$result);

   echo <<< HERE
   <table>
   <br>
   <form method="post" action="example3.php">
   <input type="submit" name="button" value="return">
   <input type="hidden" name="username" value="$username">
   <input type="hidden" name="password" value="$password">
   <input type="hidden" name="dbname" value="$dbname">
   </form>
HERE;
}

// printtable will print an entire table stored in $result.  The label
// above the table is given as $tablename
function printtable($tablename,$result)
{
   //Display the entire table
   echo <<< HERE
      <h1>$tablename</h1>
      <table border="1">
      <tr>
HERE;

   // Print the table column headers
   while ($field = mysqli_fetch_field($result))
   {
      echo "<th><b>$field->name</b></th>\n";
   }
   echo "</tr>\n";

   // Print each row.  $row is an associative array containing one
   // record in the table.
   while ($row = mysqli_fetch_assoc($result))
   {
      echo "<tr>\n";
      foreach($row as $field=>$value)
      {
         /* since the table has a border, put a blank (&nbsp;) in the variable
            if the database field is NULL so that the border of the table
            cell will be displayed */
         if ($value==NULL) $value="&nbsp;";
         echo "<td>$value</td>\n";
      }
      echo "</tr>\n";
   }
   echo "</table>";
}

?>
</body>
</html>
