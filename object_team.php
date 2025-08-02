<!--Create a class player
-- Add 2 properties: $name, $team
-- Add a method info()
Inside it, show:
👉 "[name] play in  [team]."

-- Create an object
-- Set name to "Yamal", team  to Barcelona.
Call the method. -->
<?php

class Player{
    public $name;
    public $team;

    public function info(){
        echo $this->name . " play in " . $this->team;

    }
}

$myPlayer = new Player();

$myPlayer->name = "Yamal";
$myPlayer->team = "barcelona";

$myPlayer->info();

?>