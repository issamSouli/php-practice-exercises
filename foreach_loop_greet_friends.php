<!-- Inside the file, make an array called $friends that holds three or more names.

Write a foreach loop that goes through each name in the $friends array.

Inside the loop, use echo to print a friendly greeting for each person.
When you run the script you should see one greeting per line, something like: Hello, Issam! Hello, Sara! Hello, Mehdi! -->
<?php

$friends = ["toufik", "yazid", "amin"];

foreach($friends as $friend){
    echo "Hello, " . $friend . "! <br>";
}

?>