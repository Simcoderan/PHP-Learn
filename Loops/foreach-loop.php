<?php
// foreach-loop.php
// This file demonstrates the foreach loop in PHP.

// Foreach is used to iterate over arrays easily.
$fruits = ["Apple", "Banana", "Orange"];

foreach ($fruits as $fruit) {
    echo "Fruit: $fruit<br>";
}

// Explanation:
// $fruits is an array.
// foreach loops over each element in the array, assigning it to $fruit.

// Print even numbers from a range using foreach loop

echo "Even Numbers using FOREACH loop:<br>";

$numbers = range(1, 20); // creates an array from 1 to 20

foreach ($numbers as $num) {
    if ($num % 2 == 0) {
        echo "$num<br>";
    }
}
?>
