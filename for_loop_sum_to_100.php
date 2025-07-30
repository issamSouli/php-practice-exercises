<!--
    Make one variable called $total and set it to 0.

Write a for loop that starts at 1, ends at 100, and adds each number to $total on every pass.

After the loop finishes, use echo to print a friendly sentence, like: 
The sum of numbers from 1 to 100 is 5050.

-->
<?php
$total = 0;

for($i = 1; $i <=100 ; $i++) {
    $total += $i;
}
echo "the sum of numbers from 1 to 100 is $total";








?>