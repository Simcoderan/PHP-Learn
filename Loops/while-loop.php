<?php
// while-loop.php
// This file demonstrates the use of a while loop in PHP.

// The while loop executes the block of code as long as the condition is true.
$i = 1;
while ($i <= 5) {
    echo "Count: $i<br>";
    $i++;  // Increment to avoid infinite loop
}

// Explanation:
// The condition $i <= 5 is checked before each iteration.
// Loop runs while condition is true.


// Print even numbers from 1 to 20 using while loop

echo "Even Numbers using WHILE loop:<br>";

$i = 1;
while ($i <= 20) {
    if ($i % 2 == 0) {
        echo "$i<br>";
    }
    $i++;
}
?>
