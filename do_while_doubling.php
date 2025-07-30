<!--
Make one variable called $value and set it to 1.
Write a do … while loop that:
--echos the current $value followed by a space,
--then multiplies $value by 2,

--and keeps looping while $value is less than or equal to 100.

When you run the script you should see: 
1 2 4 8 16 32 64 
-->
<?php

$value = 1;

do{
    echo $value . " ";
    $value *=2;
}
while($value <= 100);

?>
