<?php
// Passing argument by reference
function addFive(&$value) {
    $value += 5;
}

$num = 10;
addFive($num);
echo "Value after adding 5: $num"; // Output: 15
?>
