<!-- 
-- Create a function called isEven.
-- It should take one parameter: $number.
-- Inside the function, check if the number is even (hint: use the % operator).
--- If it’s even, print: "[number] is even."
--- Otherwise, print: "[number] is odd."

--Call the function with any number you choose.
-->
<?php

function isEven($number){
    if($number % 2 == 0) {
        echo "$number is even.";
    }
    else{
        echo "$number is odd.";
    }
}

isEven(199);


?>