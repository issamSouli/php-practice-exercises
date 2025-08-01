<!--
** Change the "club" to a new one (simulate a transfer).
** Add a new key "foot" with the value "Right" or "Left" (foot preference).
** Increase the "goals" by 10 (simulate a scoring streak).
** Use unset() to remove the "age" key.
** Use count() to find how many properties the player has now.
** Use echo to display this sentence:
👉 "[name] plays as a [position] for [club] and has scored [goals] goals."
** Use print_r($player); to show the final array.

-->
<?php
$player = [
    "name" => "pedri",
    "age" => 21,
    "position" => "middle",
    "club" => "barcelona",
    "nationality" => "spanish",
    "goals" => 124
]; 
$player["club"] = "liverpool";
$player["foot"] = "left";
$player["goals"] = 134;
unset($player["age"]);
count($player);

echo "{$player["name"]} plays as {$player["position"]} for {$player["club"]} and has scored {$player["goals"]} goals.";


echo "<pre>";
print_r($player);
echo "</pre>";
?>