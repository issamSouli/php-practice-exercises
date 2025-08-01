<!-- Create an associative array called $book with the following key-value pairs:
        "title" → any book title you like
        "author" → the author’s name
        "year" → the year it was published
        "genre" → the book’s genre
Then use echo to print a sentence like:
    "The book '[title]' by [author] is a [genre] novel published in [year]"
 -->
<?php

$book = [
    "title" => "12 Rules For Life",
    "author" => "Jordan Peterson",
    "year" => "2018",
    "genre" => "Self-improvement",
];

echo "The book {$book["title"]} by {$book["author"]} is a {$book["genre"]} novel published in {$book["year"]}.";


?>