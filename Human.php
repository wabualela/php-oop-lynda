<?php
echo "<title>PHP OOP Sandbox </title>";
const BR = "<br>";

class Human
{
    var $first_name;
    var $second_name;
    var $birth_date = [];

    function full_name()
    {
        return  "{$this->frist_name} {$this->second_name}";
    }

    function age()
    {

        return "";
    }
}
