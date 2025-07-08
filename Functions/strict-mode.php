<?php declare(strict_types=1); // Enable strict typing

// Function with strict type declarations
function multiply(float $a, float $b): float {
    return $a * $b;
}

echo multiply(3.5, 2.0); // Correct types

// echo multiply(3, "4.2"); // ❌ Will throw error if uncommented
?>
