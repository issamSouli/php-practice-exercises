<!--
** Create a new PHP file (for example, even_numbers.php).

** Write a for loop that prints all the even numbers from 2 up to 20, each followed by a space.-->

<?php

for($i = 2; $i < 21 ; $i++) {
    if($i % 2 == 0) {
        echo $i . " ";
    }
}

?>