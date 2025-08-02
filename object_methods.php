<!--
**Create a class Car
**Add 2 properties: $brand, $model
**Add a method called showInfo()
**Inside the method, show:
👉 "This car is a [brand] [model]."
**Create an object, set brand to "Toyota", model to "Corolla"
**Call the showInfo() method.
-->
<?php

class Car{
    public $brand;
    public $model;

    public function showInfo() {
        echo "This car is "  . $this->brand ." " . $this->model .".";
    }
}
$myCar = new Car();

$myCar->brand = "Toyota";
$myCar->model = "Corolla";

$myCar->showInfo();
?>