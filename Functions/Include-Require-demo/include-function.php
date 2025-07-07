<?php
// ----------------------------------------------------------
// include-function.php
// ----------------------------------------------------------
// This file demonstrates how to include a PHP file that
// contains a reusable function and then use that function.
// ----------------------------------------------------------

// ✅ Includes the function from greetings.php file
include 'greetings.php';

// ✅ Calls the function defined in greetings.php
greetUser("Simran");



/*
📌 Output:
When you run include-function.php, it will display:

Hello, Simran! Welcome to PHP.

Why?
 - include 'greetings.php'; loads the function into this file.
 - greetUser("Simran"); calls that loaded function.
*/



/*
✅ Why use include or require?

To avoid repeating code in multiple files.

Example:
You have a common function (greetUser) used in 5 different files.
Instead of copy-pasting it everywhere, just include one shared file.

🔄 include vs require – What's the difference?

| Keyword  | Behavior if file is missing        |
|----------|-------------------------------------|
| include  | Shows a warning, continues running |
| require  | Shows a fatal error, stops script  |

✅ Summary:

| File Name              | Purpose                              |
|------------------------|---------------------------------------|
| greetings.php          | Stores the reusable greetUser()      |
| include-function.php   | Includes and uses greetUser()        |
| require-function.php   | Same as include, but using require   |
*/
?>
