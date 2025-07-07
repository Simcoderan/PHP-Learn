<?php
// Indexed Arrays in PHP
// ----------------------
// Indexed arrays use numeric keys starting from 0 by default.
// You access elements using these numeric indexes.

$fruits = ["Apple", "Banana", "Mango"]; // Create an indexed array

// Accessing elements by index:
echo $fruits[0]; // Outputs: Apple

// Adding elements:
$fruits[] = "Orange"; // Adds "Orange" at the end

// Printing all elements:
foreach ($fruits as $fruit) {
    echo $fruit . " ";
}
// Output: Apple Banana Mango Orange 
