<?php
// echo is a language construct, not a function (can take multiple parameters)
echo "Hello, World!"; // ✅ Correct
echo "Hello, PHP!";   // ✅ Correct

// echo with multiple parameters (works)
echo "Hello, ", "PHP!", " Welcome"; // ✅ Correct - echo can take multiple comma-separated arguments

// echo("Hello, World!" , 25); ❌ ERROR - echo() as a function does NOT support multiple arguments
// echo used with parentheses works for a single string only
// echo("Hello, World!", 25); // ❌ This line will cause an error

// print is a construct that behaves like a function but only accepts one argument
print("Hello, World!"); // ✅ Correct
print "Hello, PHP!";    // ✅ Correct

// print("Hello, World!", 25); ❌ ERROR - print cannot take multiple arguments
// print("Hello, World!", 25); // ❌ This will cause an error
?>
