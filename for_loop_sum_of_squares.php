<!-- Make two variables:

$limit — set it to 5 (or any whole number you like).
$total — start it at 0.

Write a for loop that goes from 1 up to $limit.

Inside the loop, calculate the square of the current number ($i * $i).

Add that square to $total.

After the loop finishes, use echo to print a friendly sentence, such as: The sum of squares from 1 to 5 is 55.  -->
<?php

$limit = 5;
$total = 0;


for($i = 1; $i <= $limit; $i++){
    $square = $i * $i;
    $total += $square;
}
echo "the sum of squares from 1 to 5 is $total";

?>
