<?php
include "./Vehicle.php";

class Motorcyle extends Vehicle
{
    var $wheels = 2;
    var $doors = 0;

    function is_good_for_rain()
    {
        return false;
    }
}
