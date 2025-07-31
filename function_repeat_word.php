<!--
Create a function called repeatWord.
-- It should take two parameters:$word (string)
-- $times (number of times to repeat)
Inside the function, use a for loop to repeat the word the given number of times.
Each repetition should be on the same line, separated by a space.
Call the function with any word and any number.
-->
<?php

function repeatWord($word, $times) {
    for($i = 1; $i <= $times; $i++){
        echo $word . " ";
    }
}
repeatWord("issam", 3);