<style><?php include "style.css"; ?></style>
<form>
<?php
extract($_REQUEST);

echo <<< HERE
	<html>
	<body>
	<h1>Guess a number between 1 and 1000
	<br>
HERE;
if ($button==NULL or $button=='Restart') {
	$num_guesses = 0;
	$rand_num = rand(1,1000);
	$guessarray = array();

}

if ($button == "Submit") {
	$num_guesses++;
	$guessarray = $_POST["guessarray[]"];

}
echo <<< HERE
	Guess:  <input type = 'text' name = 'guess' value=$guess>
	<br>
	<h3>Number of Guesses: $num_guesses 
	<br><br>
	<form action="index.php">
		<input type='hidden' name='num_guesses' value=$num_guesses>
		<input type='hidden' name='rand_num' value=$rand_num>
		<input type='submit' name='button' value='Submit'>
		<br>
		<input type='submit' name='button' value ='Restart'>
	</form>
HERE;


$guessarray[] = $guess;
//for ($i = 0; $i < count($guessarray) $i++) {
//	echo "<input type='hidden' name='guessarray[$i]' value='$guessarray[$i]>'";
//}

if ($guess == $rand_num) {
	echo 	"<h3>You guessed the number in $num_guesses guess(es)
		<br>
		<h3>The number was $rand_num";
} else if ($button != NULL and $button != "Restart" and $guess != $rand_num) {
	echo "<br>
		Try again!
		<br><br>
		<textarea readonly name='text cols='50 rows='5' value'text'>";
	if ($guess > $rand_num) {
		$difference = "higher";
	} else {
		$difference = "lower";
	}
//	foreach($guessarray as $prev_guess) {
//		echo "Your guess was $prev_guess which is $difference from the number";
//	}
	echo "Your guess was $guess which is $difference from the number";
	echo "</textarea>";
}
echo"<HR>";
highlight_file("index.php");
echo "</body></html>";
?>
</form>
