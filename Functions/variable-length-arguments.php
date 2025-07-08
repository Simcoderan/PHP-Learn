<?php
// Function with variable number of arguments
// variadic-function
// This function takes a variable number of arguments and returns their sum.
// It uses the spread operator (...) to accept any number of parameters.
function sumAll(...$numbers) {
    return array_sum($numbers);
}

echo "Total: " . sumAll(1, 2, 3, 4); // Output: Total: 10
?>
