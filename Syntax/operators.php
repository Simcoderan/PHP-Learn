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

// ❌ Addition doesn't work on strings
$str1 = "Hello";
$str2 = "World";
$result = $str1 + $str2; // Not valid for string addition
echo "Using + on strings gives: $result"; // Likely 0
echo "<br>";


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

// -----------------------------------------
// PHP Exponential, Increment & Decrement
// -----------------------------------------

$a = 5;
$b = 2;

// ✅ Exponential / Power (using ** operator in PHP 5.6+)
$power = $a ** $b; // Means 5 raised to the power 2 → 5^2 = 25
echo "$a raised to the power $b is $power";
echo "<br>";

// ✅ Pre-increment (++$a) → increments first, then returns
$a = 5; // Resetting value
echo "Original value of a: $a";
echo "<br>";

echo "After pre-increment (++a): " . ++$a; // Output: 6
echo "<br>";

// ✅ Post-increment ($a++) → returns first, then increments
$a = 5; // Reset again
echo "After post-increment (a++): " . $a++; // Output: 5
echo "<br>";
echo "Value after post-increment: $a"; // Output: 6
echo "<br>";

// ✅ Pre-decrement (--$b) → decrements first, then returns
$b = 2; // Reset value
echo "After pre-decrement (--b): " . --$b; // Output: 1
echo "<br>";

// ✅ Post-decrement ($b--) → returns first, then decrements
$b = 2; // Reset again
echo "After post-decrement (b--): " . $b--; // Output: 2
echo "<br>";
echo "Value after post-decrement: $b"; // Output: 1
echo "<br>";
// ---------------------------------------
// PHP Comparison Operators
// ---------------------------------------
// These operators compare values and return a boolean result (true or false)

$a = 10;
$b = "10";
$c = 20;

// == Equal
var_dump($a == $b); // true (values are same)

// === Identical (value + type)
var_dump($a === $b); // false (int vs string)

// != Not equal
var_dump($a != $c); // true

// <> Not equal (alternative)
var_dump($a <> $c); // true

// !== Not identical
var_dump($a !== $b); // true

// > Greater than
var_dump($c > $a); // true

// < Less than
var_dump($a < $c); // true

// >= Greater than or equal to
var_dump($a >= 10); // true

// <= Less than or equal to
var_dump($a <= 10); // true

// <=> Spaceship operator (returns -1, 0, or 1)
var_dump($a <=> $c); // -1 (a < c)


// ---------------------------------------
// PHP Logical Operators
// ---------------------------------------

// These operators combine multiple conditions and return a boolean result

$age = 20;
$hasID = true;

// && (Logical AND) - returns true if both conditions are true
if ($age >= 18 && $hasID) {
    echo "Access granted ✅<br>";
} else {
    echo "Access denied ❌<br>";
}

$isStudent = false;
$hasPass = true;

// || (Logical OR) - returns true if at least one condition is true
if ($isStudent || $hasPass) {
    echo "Discount applied 💰<br>";
} else {
    echo "No discount.<br>";
}

$loggedIn = false;

// ! (Logical NOT) - reverses the boolean value
if (!$loggedIn) {
    echo "Please log in.<br>";
} else {
    echo "Welcome back!<br>";
}

// ---------------------------------------
// PHP Ternary Operator
// ---------------------------------------

$number = 7;
// ?: (Ternary Operator) - shorthand for if-else
echo ($number % 2 == 0) ? "$number is even<br>" : "$number is odd<br>";

$age = 16;
echo ($age >= 18) ? "You can vote<br>" : "You are underage<br>";
?>



