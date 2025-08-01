<!--
--Create an array called $places with 3 cities you want to visit.
--Add 2 more cities to the end of the array.
--Change the first city to a new one.
--Remove the fourth city using unset().
--Show the final list using print_r().
-->
<?php

$places = ["rabat", "tanger", "tetouan"];
$places [] = "casa";
$places [] = "meknes";
$places[0] = "kenitra";
unset($places[3]);
$places = array_values($places);
print_r($places);

?>
