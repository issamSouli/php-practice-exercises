<!-- Make one variable called $num and set it to 1.

Write a while loop that runs while $num is less than or equal to 15.

Inside the loop, echo the value of $num followed by a space.

Then add 2 to $num (so it visits only odd numbers).

When you run the script you should see one line of output: 

1 3 5 7 9 11 13 15            -->
<?php

$num = 1;

while($num <= 15){
    echo $num . " ";
    $num +=2;
}



?>