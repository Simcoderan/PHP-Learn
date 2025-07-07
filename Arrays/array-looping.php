<?php
// Looping Through Arrays in PHP
// ------------------------------
// To access or process each element, you usually loop through the array.

// Using foreach loop (best for arrays):
$numbers = [1, 2, 3, 4, 5];

foreach ($numbers as $num) {
    echo $num . " ";
}
// Output: 1 2 3 4 5 

echo "\n";

// Using for loop (works with indexed arrays):
for ($i = 0; $i < count($numbers); $i++) {
    echo $numbers[$i] . " ";
}
// Output: 1 2 3 4 5

// Looping associative arrays with foreach (key => value):
$person = ["name" => "Simran", "age" => 23];

foreach ($person as $key => $value) {
    echo $key . ": " . $value . "\n";
}
/* Output:
name: Simran
age: 23
*/
