<!--
Create a class called Cat
Give it 2 public properties: $name and $color
Make a new object from the class
Set the name to "Mimi"
Set the color to "white"
Show: Mimi is a white cat.
-->
<?php

class Cat{
    public $name;
    public $color;
}

$myCat = new Cat();
$myCat->name = "Mimi";
$myCat->color = "White";

echo "{$myCat->name} is a {$myCat->color} cat.";

?>