<?php
// -----------------------------
// String Variables
// -----------------------------
$txt1 = "Hello, World!";
$txt2 = "Second Hello!";

// -----------------------------
// Numeric Variables
// -----------------------------
$x = 5;
$y = 10.5;

$number = 1234567890; // Integer
$NUMBER = 1;          // Different from $number (PHP is case-sensitive for variable names)

// -----------------------------
// Output Values
// -----------------------------
echo $number;  // Outputs: 1234567890
echo $NUMBER;  // Outputs: 1

// -----------------------------
// String Concatenation
// -----------------------------
// echo $txt1 . $txt2;         // Concatenation without space
echo $txt1 . ' ' . $txt2;      // Concatenation with space: Hello, World! Second Hello!

// -----------------------------
// Arithmetic Operation
// -----------------------------
echo $x + $y;  // Outputs: 15.5
echo "<br>";   //line break for better readability


// -----------------------------
// Notes
// -----------------------------
// 'echo' is a language construct (keyword) and cannot be used as a variable name.
// 'print' is also a keyword and cannot be used as a variable name.
// Identifiers can be used as variable names, but not as function names.

// -----------------------------
// Debug Info Using var_dump()
// -----------------------------
echo "<h4>Using var_dump() to check types and values:</h4>";

var_dump($txt1); echo "<br>";
var_dump($txt2); echo "<br>";
var_dump($x);    echo "<br>";
var_dump($y);    echo "<br>";
var_dump($number); echo "<br>";
var_dump($NUMBER); echo "<br>";
?>
