<?php
// multi-line string example below

$a = 8;
$b = 4;

$result = $a+$b;


?>

<table border="9">
   <tr>
       <td>$a</td>
       <td>+</td>
       <td>$b</td>
       <td>=</td>
       <td>$result</td>
   </tr>
</table> 

<?php
echo "<table border=\"9\">";
echo "   <tr>";
echo "       <td>$a</td>";
echo "       <td>+</td>";
echo "       <td>$b</td>";
echo "       <td>=</td>";
echo "       <td>$result</td>";
echo "   </tr>";
echo "</table>";
?>

<table border="9">
   <tr>
       <td><?php echo $a ?></td>
       <td>+</td>
       <td><?php echo $b ?></td>
       <td>=</td>
       <td><?php echo $result ?></td>
   </tr>
</table> 

<?php
echo <<< HERE
<table border="9">
   <tr>
       <td>$a</td>
       <td>+</td>
       <td>$b</td>
       <td>=</td>
       <td>$result</td>
   </tr>
</table> 
HERE;

$s = <<< HERE
<table border="9">
   <tr>
       <td>$a</td>
       <td>+</td>
       <td>$b</td>
       <td>=</td>
       <td>$result</td>
   </tr>
</table> 
HERE;

echo $s;
echo $s;
echo $s;
echo $s;
echo $s;
echo $s;
echo $s;
echo $s;
?>

