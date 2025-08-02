<!--
 - Create a class Game
 - Add 2 properties: $name, $platform
 - Add a method launch()
 - Inside it, show:
👉 "Launching [name] on [platform]..."

 - Create an object
 - Set name to "FIFA 2024", platform to "PlayStation"
 - Call the method. -->
<?php 

class Game{
    public $name;
    public $platform;

    public function launch(){
        echo "Launching " . $this->name . " on " . $this->platform ."."; 
    }
}

$myGame = new Game();

$myGame->name = "FIFA 2024";
$myGame->platform = "PlayStation";

$myGame->launch();


?>