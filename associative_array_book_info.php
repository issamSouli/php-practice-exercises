<!--
instructions:

Create an associative array called $book with these key-value pairs:

    "title" → a book title
    "author" → the author’s name
    "pages" → number of pages
    "year" → the year it was published
    "genre" → the genre of the book

*Change the value of "pages" to a new number.
*Remove the "genre" key using unset().
*Use count() to get the number of remaining items in the array.
*Use print_r() to show the final array.
-->
<?php

$book = [
    "title" => "beyond order",
    "author" => "Jordan Peterson",
    "pages" => "500",
    "year" => "2022",
    "genre" => "self-improvement",
];
$book["pages"] = "650";


unset($book["genre"]);

echo count($book) . "<br>";

print_r($book);
?>
