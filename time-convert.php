<!--


Make one variable called $totalMinutes.
Give it any whole-number value you like (e.g., 125).

Split that total into:

$hours – the whole hours inside $totalMinutes

$remainingMinutes – the minutes left over after taking out the hours

Use echo to print a friendly sentence, like:
125 minutes equals 2 hour(s) and 5 minute(s).
-->
<?php 
$totalMinutes = 225;

$remainingMinutes = $totalMinutes % 60;

$hours = ($totalMinutes - $remainingMinutes) / 60;


echo "$totalMinutes equal $hours hour(s) and $remainingMinutes minute(s)";
?>
