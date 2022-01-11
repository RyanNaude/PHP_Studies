<?php

//Class name get capitalized
class Car
{
    //Methods are functions in classes
    function moveWheels()
    {
        echo "Wheels move";
    }
}


if (method_exists("Car", "moveWheels")) {
    echo "Yeah! Method does exist";
} else {
    echo "No method found";
}
