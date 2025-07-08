<?php
echo "For Loop:<br>"; 
// This script demonstrates the use of a for loop in PHP to print numbers from 1 to 5 and even numbers from 1 to 20.
for ($i = 1; $i <= 5; $i++) {   // Initialize $i to 1, loop while $i is less than or equal to 5, increment $i by 1 each iteration
    echo "Number: $i<br>";
}


// Print even numbers from 1 to 20 using for loop

echo "Even Numbers using FOR loop:<br>";

for ($i = 1; $i <= 20; $i++) {
    if ($i % 2 == 0) {
        echo "$i<br>";
    }
}
?>
