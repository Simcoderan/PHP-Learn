<?php
// do-while-loop.php
// This file demonstrates the do-while loop in PHP.

// The do-while loop runs the code block at least once,
// then continues looping while the condition is true.
$i = 1;
do {
    echo "Value of i is: $i<br>";
    $i++;
} while ($i <= 5);

// Explanation:
// The code inside do { } runs first, then condition is checked.



// Print even numbers from 1 to 20 using do...while loop

echo "Even Numbers using DO-WHILE loop:<br>";

$i = 1;
do {
    if ($i % 2 == 0) {
        echo "$i<br>";
    }
    $i++;
} while ($i <= 20);
?>
