<!--

Make two variables:
$n — put any whole number from 1 to 10 (e.g., 5).
$result — start it at 1 (this will hold the running product).

Write a do … while loop that:

multiplies $result by $n,

decreases $n by 1 each time,

keeps looping while $n is greater than 1.

After the loop finishes, use echo to print a sentence showing the original number and its factorial, like: The factorial of 5 is 120.
-->

<!--THE GOAL IS TO CALCULATE THIS : 5 * 4 * 3 * 2 * 1 USING DO WHILE-->

<?php

$n = 6;
$result = 1;
$original = $n; 

do{
    
    $result *= $n;
    $n--; 

}
while($n > 1);

echo "The factorial of $original is $result";

?>