<?php 
// -----------------------------
// regex.php
// -----------------------------
$text = "Welcome to PHP!";
if (preg_match("/PHP/", $text)) {
    echo "Match found!";
} else {
    echo "No match.";
}
?>