<?php
// Nested if
$age = 22;
$hasLicense = true;

if ($age >= 18) {
    if ($hasLicense) {
        echo "You can drive.<br>";
    } else {
        echo "You need a license to drive.<br>";
    }
}
?>
