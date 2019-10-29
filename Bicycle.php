<?php
class Bicycle
{
    var $brand;
    var $model;
    var $year;
    var $description = "Used Bicycle";
    var $weight_kg = 0.0;


    function name()
    {
        return "{$this->brand}, {$this->model} ({$this->year})";
    }

    function weight_lbs()
    {
        return (floatval($this->weight_kg) * 2.2046226218) . " lbs";
    }

    function set_weight_lbs($value)
    {
        $this->weight_kg = floatval($value) / 2.2046226218;
    }
}

$bicycle = new Bicycle;

$bicycle->brand = "new";
$bicycle->model = "SDN";
$bicycle->year = 2019;
$bicycle->weight_kg = 75;

const BR = "<br>";

echo "Bicycle Name: {$bicycle->name()}" . BR;
echo "Bicycle Weight (lbs): {$bicycle->weight_lbs()}" . BR;
echo "Bicycle Weight (kg): " . ($bicycle->weight_lbs() / 2.2046226218) . BR;
echo "Bicycle set Weight to 200 lbs: " . ($bicycle->set_weight_lbs(200)) . BR;
echo "Bicycle Weight (lbs): {$bicycle->weight_lbs()}" . BR;
echo "Bicycle Weight (kg): {$bicycle->weight_kg}" . BR;
