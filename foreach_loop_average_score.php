<!--
Inside the file, make an array called $scores that holds five exam scores (whole numbers from 0 to 100), e.g.:

Make two variables before the loop: $total, $count
Write a foreach loop that goes through each score in $scores.
    Inside the loop:
            ** add the score to $total,
            ** add 1 to $count.

After the loop, calculate the average.
Finally, echo a friendly sentence that shows the average.
-->

<?php 

$scores = [75, 64, 93, 77, 58];

$total = 0;
$count = 0;

foreach($scores as $score) {
    $total += $score;
    $count++;
}

$average = $total / $count;

echo "the average is $average";

?>