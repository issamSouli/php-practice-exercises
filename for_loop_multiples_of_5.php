<!--
Make one variable called $limit and set it to 50.

Write a for loop that starts at 5, ends at $limit, and jumps by 5 each time (so it visits 5, 10, 15, … , 50).

Inside the loop, echo each number followed by a space.

When you run the script you should see one line of output like:
5 10 15 20 25 30 35 40 45 50
-->
<?php

$limit = 50;

for($i = 5; $i <= $limit; $i+=5){
    echo $i . " ";
}

?>