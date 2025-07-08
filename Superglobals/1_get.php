<?php
// ---------------------------------------------
// 📄 1_get.php — Demonstrates $_GET Superglobal
// ---------------------------------------------

echo "<h2>1. \$_GET — Get data from URL</h2>";

// Example: 1_get.php?name=Simran
if (isset($_GET['name'])) {
  echo "Hello, " . htmlspecialchars($_GET['name']) . "!<br>";
} else {
  echo "Please pass your name in the URL using ?name=YourName<br>";
}

/*
 Explanation:
- $_GET is used to collect data sent via the URL.
- Example: superglobals/1_get.php?name=Simran
- htmlspecialchars() prevents XSS attacks.
*/
?>
