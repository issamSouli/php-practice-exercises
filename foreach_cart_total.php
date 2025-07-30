<!-- 
*make an array called $prices containing five product prices (decimals are okay), for example: $prices = [9.99, 14.50, 2.75, 6.00, 3.25];

*Make one variable called $total and set it to 0.

*Write a foreach loop that goes through each price in $prices.

*Inside the loop, add the current price to $total.
*After the loop finishes, use echo to print a friendly sentence that shows the grand total, such as: The total cost of your cart is 36.49.
-->

<?php 
$prices = [15.25, 36.25, 95.12, 9.89, 12.55];
$total = 0;

foreach($prices as $price) {
    $total += $price;
}

echo "The total cost of your cart is $total";



?>