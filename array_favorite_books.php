<!-- 
- Create an array called $players with 4 player names (strings).
- Add a new player to the end of the array.
- Change the last player to a different name.
- Remove the second player using unset().
- Display the final array using print_r().     -->
<?php
$players = ["pedri", "rafinha", "olmo", "yamal"];

$players[] = "rachford";

array_pop($players);
$players[] = "toress";

unset($players[1]);

print_r($players);

?>