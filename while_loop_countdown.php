<!--
* Make one variable called $count and set it to 10.
- Write a while loop that:
- prints the value of $count followed by a space,
- then decreases $count by 1
- and stops when $count becomes 0.
- After the loop finishes, use echo once more to print: Blast off!  -->
<?php

$count = 10;

while($count > 0) {
    echo $count . " ";
    $count --;
}
echo "Blast off!";
?>