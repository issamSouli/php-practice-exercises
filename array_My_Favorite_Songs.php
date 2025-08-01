<!--
Create an array called $songs with 5 song titles.
    * Use array_push() to add 2 new songs.
    * Use array_unshift() to add 1 song at the beginning.
    * Use unset() to remove the 4th song (index 3).
    * Use array_pop() to remove the last song.
    * Use array_shift() to remove the first song.
    * Use sort() to sort the remaining songs alphabetically.
    * Use count() to display how many songs are left.
    * Use print_r() to show the final array.
"Halo", "Believer", "Shallow", "Roar","Happy", "Senorita", "Perfect";"Diamonds", "Waka";
-->
<?php

$songs = ["Halo", "Believer", "Shallow", "Roar","Happy"];
array_push($songs, "Senorita", "Perfect");
array_unshift($songs, "Diamonds");
unset($songs[3]);
array_pop($songs);
array_shift($songs);
sort($songs);
echo "the number of songs left is " .count($songs) . "<br>";

print_r($songs);
?>