<?php
class Product
{ }
const BR = "<br>";
$tile = new Product;
$facade = new Product;
$classes = ['Product', 'Category', 'product'];

echo "<title>PHP OOP Sandbox </title>";
echo get_class($tile) .BR;

foreach ($classes as $class) {
    if (is_a($tile, $class)) {
        echo "Tile is a {$class} instance" .BR;
    } else {
        echo "Tile is not a {$class} instance" .BR;
    }

    if (is_a($facade, $class)) {
        echo "Facade is a {$class} instance" .BR;
    } else {
        echo "Facade is not a {$class} instance" .BR;
    }
}
