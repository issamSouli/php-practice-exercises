<!--
Write a for loop that starts at 10, ends at 1, and decreases by 1 each time.

Inside the loop, echo the current number followed by a space.

After the loop finishes, echo one more line: Lift off!

Expected output (all on one line except the final message):
10 9 8 7 6 5 4 3 2 1 
Lift off!    -->

<?php

for($i = 10; $i >=1; $i-- ) {
    echo $i . " ";
}
echo "<br> Lift off!";

?>