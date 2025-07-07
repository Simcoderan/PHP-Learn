<?php
// Function with variable number of arguments
function sumAll(...$numbers) {
    return array_sum($numbers);
}

echo "Total: " . sumAll(1, 2, 3, 4); // Output: Total: 10
?>
