<!--
-- Create a new PHP file (e.g., compare.php).
-- Make two variables, $x and $y, and give each a whole-number value of your choice.
-- Write an if … else statement that:
-- checks whether $x is greater than $y,
-- checks whether $y is greater than $x,
-- and handles the case where they are equal.
-- Use echo to display a clear message telling the user which number is bigger—or that they are the same.
-->
<?php 

$x = 100;
$y = 100;
if($x > $y) {
    echo "$x is bigger than $y";
}
elseif($y > $x) {
    echo "$y is bigger than $x";
} 
else{
    echo "$x is equal to $y";
}


?>