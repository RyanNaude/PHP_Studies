<?php

//Class name get capitalized
class Car
{
    //Properties are variables in classes
    var $model;
    var $engine;
    var $total = 0;

    //Methods are functions in classes
    function moveWheels($data, $total)
    {
        echo "Wheels move of " . $data . ". Current # of wheelturns " . $total . "<br/>";
    }
}

//Instatiate class Car
$bmw = new Car();
$merc = new Car();
$truck = new Car();

$winner;

for ($i = 0; $i < 10; $i++) {
    $rNum = rand(1, 3);
    if ($rNum === 1) {
        $bmw->total++;
        $bmw->moveWheels("BMW", $bmw->total);
    } elseif ($rNum === 2) {
        $merc->total++;
        $merc->moveWheels("Mercedes-Benz", $merc->total);
    } else {
        $truck->total++;
        $truck->moveWheels("MAC Truck", $truck->total);
    }

    if ($bmw->total > $merc->total && $bmw->total > $truck->total) {
        $winner = " BMW";
    } elseif ($merc->total > $bmw->total && $merc->total > $truck->total) {
        $winner = "Merc";
    } elseif ($truck->total > $bmw->total && $truck->total > $merc->total) {
        $winner = "Truck";
    } else {
        $winner = "Some sort of draw";
    }
}

echo "<br/><br/>";
$bmw->model = "330i";
$merc->model = "slk220";
$truck->model = "Blah5000";

echo "BMW " . $bmw->model . " Points " . $bmw->total . "<br/>"; //$bmw->wheels: is a variable from the Car class and instatiated on $bmw
echo "Merc " . $merc->model . " Points " . $merc->total . "<br/>"; //$bmw->wheels: is a variable from the Car class and instatiated on $bmw
echo "Truck " . $truck->model . " Points " . $truck->total . "<br/>"; //$bmw->wheels: is a variable from the Car class and instatiated on $bmw
echo "<br/>Winner: " . $winner;
