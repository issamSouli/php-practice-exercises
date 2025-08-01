<!--
* Create an associative array called $movie with the following key-value pairs:

    "title" → a movie title
    "director" → the name of the director
    "duration" → duration in minutes (as a number)
    "release_year" → the year the movie was released
    "rating" → IMDb rating (e.g., 8.2)
* Change the value of "rating" to a new value.
* Add a new key "language" with any value (e.g., "English").
* Remove the "duration" key using unset().
* Count how many items are now in the array (use count()).
* Display the final array using print_r().
-->
<?php

$movie = [
    "title" => "EndGame",
    "director" => "rachford",
    "duration" => 180,
    "release_year" => "2019",
    "rating" => 8.9
];
$movie["rating"] = "7.2";
$movie["language"] = "english";
unset($movie["duration"]);
echo count($movie) . "<br>";

print_r($movie);
?>