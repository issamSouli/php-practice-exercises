<!--
* Create a class City
* Add 2 properties: $name, $country
* Add a method describe()
* Inside it, show:
👉 "[name] is a city in [country]."

* Create an object
* Set name to "Paris", country to "France"
* Call the method. -->
<?php

class City{
    public $name;
    public $country;

    public function describe(){
        echo $this->name . " is a city in " . $this->country . ".";
    }
}

$myCity = new City();

$myCity->name = "Paris";
$myCity->country = "France"; 

$myCity->describe();

?>