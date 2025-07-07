<?php

//Goal: Learn how to split PHP code into multiple files and use include or require to connect them.
// greetings.php

function greetUser($name) {
    echo "Hello, $name! Welcome to PHP.";
}
//This file defines the function greetUser() but does not call it.
?>
