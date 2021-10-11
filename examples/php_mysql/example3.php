<html>
<head>
<title>DB Example</title>
</head>
<body>
<?php
extract($_POST);

   echo <<< HERE
   <h3>Select Option</h3>
   <form method="post" action="ex3query.php">
   <input type="submit" name="button" value="query database">
   <input type="hidden" name="username" value="$username">
   <input type="hidden" name="password" value="$password">
   <input type="hidden" name="dbname" value="$dbname">
   </form>
   <form method="post" action="ex3add.php">
   <input type="submit" name="button" value="add entry">
   <input type="hidden" name="username" value="$username">
   <input type="hidden" name="password" value="$password">
   <input type="hidden" name="dbname" value="$dbname">
   </form>
   <form method="post" action="ex3delete.php">
   <input type="submit" name="button" value="delete entry">
   <input type="hidden" name="username" value="$username">
   <input type="hidden" name="password" value="$password">
   <input type="hidden" name="dbname" value="$dbname">
   </form>
   <form action=".">
      <input type="submit" value="done">
   </form>
HERE;

?>
</body>
</html>
