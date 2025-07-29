<!--
- Make one variable called $limit and set it to 5.
- Write a for loop that goes from 1 up to $limit.

Inside the loop, calculate the square of the current number ($i * $i) and echo a line like:
1 squared is 1
2 squared is 4
…
5 squared is 25
-->

<?php

$limit = 5;
for($i = 1; $i <= $limit; $i++){
    $square = $i*$i;
    echo "$i squared is $square" . "<br><br>"; 
}


?>