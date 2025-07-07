<?php
// ---------------------------------------
// PHP Arithmetic Operators and Rules
// ---------------------------------------

$a = 5;
$b = 10;

// 1. Addition
$c = $a + $b;
echo "The sum of $a and $b is $c"; // Outputs: The sum of 5 and 10 is 15
echo "<br>"; // Line break for better readability

// 2. Subtraction
$d = $b - $a;
echo "The difference between $b and $a is $d"; // Outputs: 5
echo "<br>";

// 3. Multiplication
$e = $a * $b;
echo "The product of $a and $b is $e"; // Outputs: 50
echo "<br>";

// 4. Division (with rule: denominator ≠ 0)
if ($a != 0) {
    $f = $b / $a;
    echo "$b divided by $a is $f"; // Outputs: 2
} else {
    echo "Division by zero is not allowed!";
}
echo "<br>";

// 5. Modulus (remainder)
$g = $b % $a;
echo "The remainder when $b is divided by $a is $g"; // Outputs: 0
echo "<br>";

// ---------------------------------------
// Rule: Division by 0 is NOT allowed in PHP
// ---------------------------------------
$zero = 0;
if ($zero != 0) {
    echo "10 divided by $zero is " . (10 / $zero);
} else {
    echo "⚠️ Error: Division by zero is not allowed in PHP!";
}
echo "<br>";
?>
