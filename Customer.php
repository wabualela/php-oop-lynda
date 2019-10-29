<?php
include './Human.php';

class Customer extends Human
{ }

echo "<title>PHP OOP Sandbox </title>";
const BR = "<br>";






$kamal = new Customer;
$kamal->frist_name = "Kamal";
$kamal->second_name = "Farouk";
$kamal->birth_date['d'] = 23;
$kamal->birth_date['m'] = 7;
$kamal->birth_date['y'] = 1992;

echo $kamal->full_name() . BR;

// $omer = new Customer;
// $omer->frist_name = "Omer";
// $omer->second_name = "Ali";
// echo $omer->full_name() . BR;

