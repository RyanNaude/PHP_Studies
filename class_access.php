<?php

//Class name get capitalized
class Car
{
    //Properties are variables in classes
    // Access breakdown
    //public same as var - available to whole program
    var $model;
    public $total;
    //protected - only available to this class or any subclass
    protected $engine;
    //private - only available to this class regardless of inheritance
    private $class_only = true;

    //Methods are functions in classes
    function moveWheels()
    {
        $this->total++;
        echo "Wheels move of " . $this->model . ". Current # of wheelturns " . $this->total . "<br/>";
    }
}

class Plane extends Car
{
    function dispEngine()
    {
        //$engine variable only available here because it is set as protected in the Car class. Protected allows access to parent class and sub-classes
        $this->engine = "Propeller";
        echo "Plane Engine: " . $this->engine;
    }
}

//Instatiate class Car
$bmw = new Car();
$merc = new Car();
$truck = new Car();

$bmw->model = "BMW 330i";
$merc->model = "Mercedes-Benz slk220";
$truck->model = "MAC M5000";



$winner;

for ($i = 0; $i < 10; $i++) {
    $rNum = rand(1, 3);
    if ($rNum === 1) {
        $bmw->moveWheels();
    } elseif ($rNum === 2) {
        $merc->moveWheels();
    } else {
        $truck->moveWheels();
    }

    if ($bmw->total > $merc->total && $bmw->total > $truck->total) {
        $winner = $bmw->model;
    } elseif ($merc->total > $bmw->total && $merc->total > $truck->total) {
        $winner = $merc->model;
    } elseif ($truck->total > $bmw->total && $truck->total > $merc->total) {
        $winner = $truck->model;
    } else {
        $winner = "Some sort of draw";
    }
}

echo "<br/><br/>";


echo $bmw->model . " Points " . $bmw->total . "<br/>"; //$bmw->wheels: is a variable from the Car class and instatiated on $bmw
echo $merc->model . " Points " . $merc->total . "<br/>"; //$bmw->wheels: is a variable from the Car class and instatiated on $bmw
echo $truck->model . " Points " . $truck->total . "<br/>"; //$bmw->wheels: is a variable from the Car class and instatiated on $bmw
echo "<br/>Winner: " . $winner . "<br/><br/>";
//Below class property set as private and will not allow access outside class
// echo "<br/>Chec: " . $bmw->class_only;

$piper = new Plane();
$piper->model = "Piper Cub";

echo $piper->model . "<br/>";
$piper->dispEngine();
