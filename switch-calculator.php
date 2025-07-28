<!--
Make three variables:
$a – any whole number you like.
$b – any whole number you like.
$operator – set it to one of these four strings: '+', '-', '*', '/'.

Write a switch statement that:
-- adds $a and $b if $operator is '+',
-- subtracts $b from $a if $operator is '-',
-- multiplies $a and $b if $operator is '*',
-- divides $a by $b if $operator is '/' (assume $b isn’t zero),
-- otherwise prints “Unknown operator!”.

Use echo to show a clear sentence that includes both numbers, the operator, and the result, like: 8 * 3 = 24 -->

<?php

$a = 150;
$b = 20;
$operator = "*" ;

switch($operator) {
    case "+" :
    echo "$a + $b = " . ($a+$b);
    break;
    case "-" :
    echo "$a - $b = " . ($a-$b);
    break;
    case "*" :
    echo "$a * $b = " . ($a*$b);
    break;
    case "/" :
    echo "$a / $b = " . ($a/$b);
    break;
    default :
    echo "i dont know how to calculate it.";
}
?>
