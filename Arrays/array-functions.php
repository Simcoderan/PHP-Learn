<?php
// Useful PHP Array Functions
// ---------------------------
// PHP provides many built-in functions to manipulate arrays efficiently.

$colors = ["Red", "Green"];

// Add an element at the end:
array_push($colors, "Blue"); // $colors = ["Red", "Green", "Blue"]

// Remove the last element:
array_pop($colors); // removes "Blue"

// Count elements:
echo "Total colors: " . count($colors) . "\n"; // Outputs: 2

// Merge arrays:
$moreColors = ["Yellow", "Pink"];
$allColors = array_merge($colors, $moreColors);
// $allColors = ["Red", "Green", "Yellow", "Pink"]

// Check if a value exists:
if (in_array("Red", $allColors)) {
    echo "Red is in the array.\n";
}

// Print all colors:
foreach ($allColors as $color) {
    echo $color . " ";
}
/* Output:
Total colors: 2
Red is in the array.
Red Green Yellow Pink 
*/
