<!--
make an array called $words containing at least five different words.
Make one variable called $longest and set it to an empty string ("").
Write a foreach loop that goes through each word in $words.

--Inside the loop, compare the length of the current word to the length of $longest.

--If the current word is longer, replace $longest with that word.
After the loop finishes, use echo to print a friendly sentence that shows which word was the longest and how many letters it has, such as:
The longest word is "elephant" with 8 letters.
-->
<?php

$words = ["pedri", "yamal", "olmo", "rafinha", "rachford"];
$longest = "";

foreach($words as $word){
    if(strlen($word) > strlen($longest)) {
        $longest = $word;
    }
}
echo "the longest word is $longest.";


?>