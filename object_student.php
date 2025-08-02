<!--
* Create a class Student
* Add 2 properties: $name, $grade
* Add a method introduce()
* Inside it, show:
👉 "Hello, I'm [name] and I got a [grade]."

* Create an object
* Set name to "Sara", grade to "A"
* Call the method.
-->

<?php 

class Student{
    public $name;
    public $grade;

    public function introduce(){
        echo "Hello, I'm " . $this->name . " " . "and I got a " . $this->grade . ".";
    }
}
$myStudent = new Student();

$myStudent->name = "Sara";
$myStudent->grade = "A";

$myStudent->introduce();


?>