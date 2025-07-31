<!--
Create an array called $todos with 3 tasks (as strings).

Add a new task to the end of the array.

Change the first task to something new.

Remove the third task using unset().

Display the final array using print_r().

-->

<?php

$todos = ["Learning", "Running", "Gym"];
$todos[] = "Praying";
$todos[0] = "Programming";
unset($todos[2]);
print_r($todos);

?>   