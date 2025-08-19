<?php 

    class Books{
        public $name;
        public $author;
        public $category;
        public $pages;

        public function __construct($name, $author, $category, $pages){
            $this->name = $name;
            $this->author = $author;
            $this->category = $category;
            $this->pages = $pages;
        }
        
        public function bookCard(){
            echo "* {$this->name} is a book written by {$this->author}, the category of the book is {$this->category} and the number of pages is {$this->pages}. <br><br>";
        }
    }
    $book1 = new Books("12 Rules For Life", "Jordan Peterson", "self-help", 489);
    $book1->bookCard();

    $book2 = new Books("Athomic Habits", "James Clair", "self-help", 365);
    $book2->bookCard();


?>