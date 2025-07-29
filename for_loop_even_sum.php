<!--
Make one variable called $total and set it to 0.

Write a for loop that starts at 2, ends at 20, and jumps by 2 each time (so it visits 2, 4, 6, …, 20).

Inside the loop, add the current number to $total.

After the loop finishes, use echo to print a friendly sentence, like: The sum of even numbers from 2 to 20 is 110.

--->
<?php

$total = 0;

for($i = 2; $i <= 20; $i+=2) {
    $total+=$i; // $total = $total + $i;
}
echo "The Sum Of Even numbers from 2 to 20 is $total";

?>