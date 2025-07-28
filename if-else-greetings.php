<!--
Inside the file, make one variable called $hour and give it any whole-number value from 0 to 23 (representing the current hour on a 24-hour clock).
*Write an if / elseif / else chain that:
--prints “Good morning!” if the hour is 5 – 11,
--prints “Good afternoon!” if the hour is 12 – 17,
--prints “Good evening!” if the hour is 18 – 21,

*otherwise (for 22 – 24 or 0 – 4) prints “Good night!”.

Use echo to show a friendly sentence that includes the hour and the greeting, such as: It’s 14:00 — Good afternoon!

-->

<?php

$hour = 24;

if($hour < 0 || $hour > 23){
    echo "please enter a number between 0 and 23";
}
elseif($hour <=4 && $hour >= 22){
    echo "its $hour:00 - Good night!";
}
elseif($hour >= 18){
    echo "its $hour:00 - Good evening!";
}
elseif($hour >= 12){
    echo "its $hour:00 - Good afternoon!";
}
else{
    echo "its $hour:00 - Good morning!";
}


?>