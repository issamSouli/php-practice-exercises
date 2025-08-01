<!--
Create an array called $snacks with 4 snack names (strings).
Use array_push() to add 2 more snacks at the end.
Use array_unshift() to add 1 snack at the beginning.
Use array_pop() to remove the last snack.
Use array_shift() to remove the first snack.
Finally, use print_r($snacks); to display the updated array.
//"Granola Bar", "Fruit Snacks"
 -->
<?php
//"Granola Bar", "Fruit Snacks"
$snacks = ["Chips", "Cookies", "Popcorn", "Pretzels"];
array_push($snacks, "Granola Bar", "Fruit Snacks");
array_unshift($snacks, "kandies");
array_pop($snacks);
array_shift($snacks);

print_r($snacks);
?>