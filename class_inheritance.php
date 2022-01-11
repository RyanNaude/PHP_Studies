<?php

//Class name get capitalized
class Car
{
    //Properties are variables in classes
    var $model;
    var $engine;
    var $total = 0;

    //Methods are functions in classes
    function moveWheels()
    {
        $this->total++;
    }
}

//Extends gives the Plane class all the properties and methods of the Car class
class Plane extends Car
{
    //Below property will only be availble to this class but all Car class properties and methods are avaible because this class extends that one.
    var $engineType;
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

echo "<h4><u>CAR</u></h4>";
echo $bmw->model . " Points " . $bmw->total . "<br/>"; //$bmw->wheels: is a variable from the Car class and instatiated on $bmw
echo $merc->model . " Points " . $merc->total . "<br/>"; //$bmw->wheels: is a variable from the Car class and instatiated on $bmw
echo $truck->model . " Points " . $truck->total . "<br/>"; //$bmw->wheels: is a variable from the Car class and instatiated on $bmw
echo "<br/>Winner: " . $winner;
echo "<br/><h4><u>PLANE</u></h4>";

//Instatiate class Plane
$piper = new Plane();
$piper->model = "Piper Cub";
$piper->engineType = "Propeller";

$f14 = new Plane();
$f14->model = "F14 Tomcat";
$f14->engineType = "Jet Turbine";

for ($i = 0; $i < 10; $i++) {
    $rNum = rand(1, 2);
    if ($rNum === 1) {
        $piper->moveWheels("BMW", $piper->total);
    } elseif ($rNum === 2) {
        $f14->moveWheels("Mercedes-Benz", $f14->total);
    }

    if ($piper->total > $f14->total) {
        $winner = $piper->model;
    } elseif ($f14->total > $piper->total) {
        $winner = $f14->model;
    } else {
        $winner = "Some sort of draw";
    }
}

echo $piper->model . " Points " . $piper->total . "<br/>"; //$bmw->wheels: is a variable from the Car class and instatiated on $bmw
echo $f14->model . " Points " . $f14->total . "<br/>"; //$bmw->wheels: is a variable from the Car class and instatiated on $bmw
echo "<br/>Winner: " . $winner;
