<?php
include './Vehicle.php';

class Car extends Vehicle
{
    var $wheels = 4;
    var $doors = 4;
    var $convertible = false;

    function is_good_for_rain()
    {
        return !$this->convertible;
    }
}
