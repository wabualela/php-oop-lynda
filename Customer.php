<?php
include './User.php';

class Customer extends User
{
    var $customer_type;
}


$kamal = new Customer;
$kamal->frist_name = "Kamal";
$kamal->second_name = "Farouk";
$kamal->username = "kfarouk";
$kamal->email = "kamalfarouk@mail.sd";

echo $kamal->full_name() . BR;

// $omer = new Customer;
// $omer->frist_name = "Omer";
// $omer->second_name = "Ali";
// echo $omer->full_name() . BR;
