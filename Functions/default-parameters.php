<?php
// Function with default parameter value
function greet($name = "Guest") {
    echo "Welcome, $name!";
}

greet();           // Output: Welcome, Guest!
greet("Simran");   // Output: Welcome, Simran!
?>
