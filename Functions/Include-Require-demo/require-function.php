<?php
// ----------------------------------------------------------
// require-function.php
// ----------------------------------------------------------
// This file demonstrates how to require another PHP file
// that contains a reusable function and then use that function.
// ----------------------------------------------------------

// ✅ Requires the function from greetings.php file
require 'greetings.php';

// ✅ Calls the function defined in greetings.php
greetUser("Simran");



/*
📌 Output:
When you run require-function.php, it will display:

Hello, Simran! Welcome to PHP.

Why?
 - require 'greetings.php'; loads the function.
 - greetUser("Simran"); calls that loaded function.
*/



/*
🔄 include vs require – What's the difference?

| Keyword  | Behavior if file is missing        |
|----------|-------------------------------------|
| include  | Shows a warning, continues running |
| require  | ❌ Fatal error, script stops       |

So, if greetings.php is missing or has an error:
- include → script continues (may cause undefined function error)
- require → script stops immediately for safety

✅ Summary:

| File Name              | Purpose                              |
|------------------------|---------------------------------------|
| greetings.php          | Stores the reusable greetUser()      |
| include-function.php   | Includes and uses greetUser()        |
| require-function.php   | Requires and uses greetUser()        |
*/
?>
