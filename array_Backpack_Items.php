<!--
Create an array called $backpack with 5 items you’d take on a trip (strings).
Use count() to find out how many items are in the backpack.
Use array_push() to add one more item.
Use unset() to remove the third item.
Use echo to show this sentence:
👉 "I have [number] items in my backpack."
Finally, use print_r() to display the contents of the backpack.

-->
<?php
$backpack = ["Water Bottle", "Notebook", "Sunglasses", "Snacks", "Phone"];
count($backpack);
array_push($backpack, "First Aid Kit");
unset($backpack[2]);
echo "i have " .count($backpack)." items in my backpack.<br>";

print_r($backpack);
?>
