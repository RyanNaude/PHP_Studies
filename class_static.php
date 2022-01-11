<?php

class Car
{
    static $type = "Car";
    var $model;
}

class Plane extends Car
{
    static $type = "plane";
}

$car = new Car();
$car->model = "BMW 330i";

$plane = new Plane();
$plane->model = "F14 Tomcat";


//Static variables is a class get called as below. They get called on their class name, not instance name eg. Car::$type
$carType = Car::$type;
$planeType = Plane::$type;

echo $car->model . " -  " . $carType . "<br/>";
echo $plane->model . " -  " . $planeType . "<br/>";
