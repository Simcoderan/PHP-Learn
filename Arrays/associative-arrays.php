<?php
// Associative Arrays in PHP
// -------------------------
// Associative arrays use named keys (strings) to store and access values.

$person = [
    "name" => "Simran",
    "age" => 23,
    "city" => "Mathura"
];

// Access value by key:
echo $person["name"]; // Outputs: Simran

// Adding a new key-value pair:
$person["email"] = "simran@example.com";

// Loop through associative array keys and values:
foreach ($person as $key => $value) {
    echo $key . ": " . $value . "\n";
}
/* Output:
name: Simran
age: 23
city: Mathura
email: simran@example.com
*/
