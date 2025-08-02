<!--
Create a class called Phone
Add 2 public properties: $brand, $model
Make a new object from the class
Set brand to "Samsung"
Set model to "Galaxy S21"
Show: This phone is a Samsung Galaxy S21.
-->

<?php

class Phone{
    public $brand;
    public $model;
}

$myPhone = new Phone();

$myPhone->brand = "Samsung";
$myPhone->model = "Galaxy S21";

echo "This phone is a {$myPhone->brand} {$myPhone->model}.";

?>