<?php
// Multidimensional Arrays in PHP
// -------------------------------
// These are arrays containing other arrays.
// Useful for storing complex data like tables, grids, or records.

$contacts = [
    ["name" => "Simran", "phone" => "12345"],
    ["name" => "Raj", "phone" => "67890"],
    ["name" => "Anita", "phone" => "54321"]
];

// Access the second contact's name:
echo $contacts[1]["name"]; // Outputs: Raj

// Loop through all contacts and print details:
foreach ($contacts as $contact) {
    echo "Name: " . $contact["name"] . ", Phone: " . $contact["phone"] . "\n";
}
/* Output:
Name: Simran, Phone: 12345
Name: Raj, Phone: 67890
Name: Anita, Phone: 54321
*/
