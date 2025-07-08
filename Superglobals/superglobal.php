<?php
/*
  super global.php
  This file explains PHP Superglobals — built-in variables always available in all scopes.

  PHP Superglobals were introduced in PHP 4.1.0.
  They are predefined variables that can be accessed anywhere in your code,
  including inside functions, classes, or files, without needing to use
  the 'global' keyword or other tricks.

  The main PHP superglobals are:
    - $GLOBALS
    - $_SERVER
    - $_REQUEST
    - $_POST
    - $_GET
    - $_FILES
    - $_ENV
    - $_COOKIE
    - $_SESSION

  This example file will show you the basics of some of these superglobals.
*/

// Example 1: $GLOBALS
// This superglobal is an associative array containing references to all global variables
$testVar = "Hello, Global!";
function testGlobal() {
    // Access global variable using $GLOBALS array
    echo "Accessing global variable inside function: " . $GLOBALS['testVar'] . "<br>";
}
testGlobal();

// Example 2: $_SERVER
// Contains information about headers, paths, and script locations
echo "Current script name: " . $_SERVER['SCRIPT_NAME'] . "<br>";
echo "Server software info: " . $_SERVER['SERVER_SOFTWARE'] . "<br>";

// Example 3: $_GET and $_POST
// These are used to collect form data sent with GET or POST methods
// For demonstration, let's assume you have a form sending data to this file

// Check if form is submitted using POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "POST Data received: ";
    print_r($_POST);
    echo "<br>";
}

// Check if any GET data is present
if (!empty($_GET)) {
    echo "GET Data received: ";
    print_r($_GET);
    echo "<br>";
}

// Example 4: $_REQUEST
// Contains the contents of $_GET, $_POST, and $_COOKIE combined
echo "All request data (GET, POST, COOKIE): ";
print_r($_REQUEST);
echo "<br>";

// Example 5: $_COOKIE
// This contains cookie data sent by the browser
if (!empty($_COOKIE)) {
    echo "Cookies received: ";
    print_r($_COOKIE);
    echo "<br>";
} else {
    echo "No cookies received.<br>";
}

// Note: $_FILES and $_SESSION require file uploads and session start respectively,
// so they will be explained with examples in later chapters.

?>
