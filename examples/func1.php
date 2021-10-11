<?php
writeMsg(); // call the function

function writeMsg() {
    echo "Hello world!<br/>\n";
}

writeMsg(); // call the function

function familyName($fname, $year) {
    echo "$fname Refsnes. Born in $year <br>";
}

familyName("Hege", 1975);
familyName("Stale", 1978);
familyName("Kai Jim", 1983);

// names of the parameters in the function header (formal parameters)
// do not need to match the parameter names in the function 
// call (actual parameters
function sum($x, $y) {
    $z = $x + $y;
    return $z;
}

echo "5 + 10 = " . sum(5, 10) . "<br>";
echo "7 + 13 = " . sum(7, 13) . "<br>";
echo "2 + 4 = " . sum(2, 4) . "<br>";
$num1 = 8;
$num2 = 14;
echo "$num1 + $num2 = " . sum($num1, $num2) . "<br>";

// scope rules
// global variables (variables not declared in a function) are not
// known inside a function.
// parameters or variables created in a function are not known
// outside the function


?>
