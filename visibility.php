<?php

    class User{
        public $name;
        private $age;

        public function __construct($name, $age){
            $this->name = $name;
            $this->age = $age;
        }
        
        public function greet(){
            echo "my name is {$this->name} and i'm {$this->age} years old <br>";
        }
    }

    $user1 = new User("issam", 29);
    $user1->greet();

    $user1->age = 30;
    echo $user1->age;

?>