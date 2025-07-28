<!--

** Inside the file, make one variable called $month and give it any whole-number value from 1 to 12.
*Write an if / elseif / else chain that:
*prints “Winter” if the month is 12, 1, or 2
*prints “Spring” if the month is 3, 4, or 5
*prints “Summer” if the month is 6, 7, or 8
otherwise prints “Autumn” for 9, 10, or 11
-->

<?php 

$month = 0;

if($month < 1 || $month > 12) {
    echo "this month doesn't exist.";
}
elseif($month == 12 || $month == 1 || $month == 2) {
    echo "We are in Winter.";
}
elseif($month == 3 || $month == 4 || $month == 5) {
    echo "We are in Spring.";
}
elseif($month == 6 || $month == 7 || $month == 8) {
    echo "We are in summer.";
}
else{
    echo "We are in Autumn.";
}

?>