<?php
// Recursive function for factorial
function factorial($n) {
    if ($n <= 1) return 1;
    return $n * factorial($n - 1);
}

echo "Factorial of 5 is " . factorial(5); // Output: 120
?>
