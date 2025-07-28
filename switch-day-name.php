<!--
**Make one variable called $dayNumber and give it any whole-number value from 1 to 7. Pretend 1 = Monday, 2 = Tuesday, …, 7 = Sunday.
-Write a switch statement that:
-prints “Monday” if the value is 1,
-prints “Tuesday” if the value is 2,
-prints “Wednesday” if the value is 3,
-prints “Thursday” if the value is 4,
-prints “Friday” if the value is 5,
-prints “Saturday” if the value is 6,
-prints “Sunday” if the value is 7,
-otherwise prints “That number isn’t a valid day!” for anything outside 1 – 7.
*Use echo to show a sentence that includes both the number and the matching day, like: Day 3 is Wednesday.-->

<?php

$dayNumber = 7;

switch($dayNumber){
    case 1:
    echo "day 1 is Monday";
    break;
    case 2:
    echo "day 2 is Tuesday";
    break;
    case 3:
    echo "day 3 is Wednesday";
    break;
    case 4:
    echo "day 4 is Thursday";
    break;
    case 5:
    echo "day 5 is Friday";
    break;
    case 6:
    echo "day 6 is Saturday";
    break;
    case 7:
    echo "day 7 is Sunday";
    break;
    default: 
    echo "That number isn’t a valid day!";
}



?>