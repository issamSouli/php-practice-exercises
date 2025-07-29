<!-- Make two variables:

$i — start it at 1.
$limit — set it to 10 (we only want the first ten multiples).

- Write a while loop that runs while $i is less than or equal to $limit.
- Inside the loop, calculate 3 * $i and echo the result followed by a space.
- Don’t forget to increment $i at the end of each loop.
When the loop finishes you should see one line of output:3 6 9 12 15 18 21 24 27 30    -->

<?php
$i = 1;
$limit = 10;

while($i <= $limit){
    echo $i * 3 . " ";
    $i++;
}


?>