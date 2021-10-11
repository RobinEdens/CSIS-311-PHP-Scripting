<form>
<?php
// extract
   extract($_REQUEST);
   
// prep for display
   if ($button=="begin" or $button=="clear story")
      clearStory($story,$linenumber);
   elseif ($button=="add line")
      updateStory($story,$linenumber,$newline);
      
// display and pass data
   if ($button==NULL or $button=="restart")
      namePage();
   else
   {
      storyPage($name,$story);
      passData($name,$story,$linenumber);
   }
   
// functions
function clearStory(&$story,&$linenumber)
{
   $story=NULL;
   $linenumber=0;
}

function updateStory(&$story,&$linenumber,$newline)
{
   $linenumber++;
   $story = $story . "$linenumber. $newline\n";
}

function namePage()
{
   echo <<< HERE
   <h1>Enter Your Story</h1>
   <h3>Name <input type="text" name="name" autocomplete="off"></h3>
   <input type="submit" name="button" value="begin">
HERE;
}

function storyPage($name,$story)
{
   echo <<< HERE
      <h1>$name Story</h1>
      <textarea rows="10" cols="40">$story</textarea>
      <h3>new line<input type="text" name="newline" autocomplete="off"></h3>
      <input type="submit" name="button" value="add line">
      <input type="submit" name="button" value="clear story">
      <input type="submit" name="button" value="restart">
HERE;
}

function passData($name,$story,$linenumber)
{
   echo <<< HERE
      <input type="hidden" name="story" value="$story">
      <input type="hidden" name="linenumber" value="$linenumber">
      <input type="hidden" name="name" value="$name">
HERE;
}

?>
</form>