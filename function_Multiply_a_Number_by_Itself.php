<!--
Create a function called square.

The function should take one parameter: $number.

Inside the function, return the number multiplied by itself.

Call the function with any number (e.g., 4) and use echo to show the result.
-->

<?php


function square($number){
    return $number*=$number;
    
}
echo square(4);
?>