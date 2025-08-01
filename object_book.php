<!--
*- Create a class called Book
*- Add 3 public properties: $title, $author, $year
*- Make a new object from the class
*- Set the title to "Clean Code"
*- Set the author to "Robert"
*- Set the year to 2008
*- Show: Clean Code was written by Robert in 2008.-->
<?php

class Book {
    public $title;
    public $author;
    public $year;
}

$myBook = new Book();
$myBook ->title = "Clean Code";
$myBook ->author = "Robert";
$myBook ->year = 2008;

echo "{$myBook ->title} was written by {$myBook ->author} in {$myBook ->year}.";


?>