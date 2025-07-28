<!--Inside the file, make one variable called $rating and give it any whole-number value from 1 to 5.
*Write a switch statement that:
*prints “Very Bad” if $rating is 1,
*prints “Bad” if $rating is 2,
*prints “Average” if $rating is 3,
*prints “Good” if $rating is 4,
*prints “Excellent” if $rating is 5,
*otherwise prints “That rating isn’t valid!” for anything outside 1 – 5.

Use echo to show a friendly sentence that includes both the number and the matching description, such as:A rating of 4 is Good.

-->

<?php

$rating = 2;

switch($rating){
    case 1:
    echo "A rating of 1 is Very Bad.";
    break;
    case 2:
    echo "A rating of 2 is Bad.";
    break;
    case 3:
    echo "A rating of 3 is Average.";
    break;
    case 4:
    echo "A rating of 4 is Good.";
    break;
    case 5:
    echo "A rating of 5 is Excellent.";
    break;
    default :
    echo "That rating isn’t valid!";
}



?>