<?php

    class Player{
        public $name;
        public $country;
        public $club;
        public $number;

        public function __construct($name, $country, $club, $number){
            $this->name = $name;
            $this->country = $country;
            $this->club = $club;
            $this->number = $number;
        }

        public function playerCard(){
            echo "# {$this->name} is from {$this->country}, He plays in {$this->club} and he wear the number {$this->number}. <br><br>";
        }
    }

    $player1 = new Player("Lamine Yamal", "Spane", "Barcelona", 10);
    $player1->playerCard();

    $player2 = new Player("Dani Olmo", "Spane", "Barcelona", 20);
    $player2->playerCard();

?>