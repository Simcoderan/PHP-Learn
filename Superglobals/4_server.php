<?php
// ---------------------------------------------
// 📄 4_server.php — Demonstrates $_SERVER
// ---------------------------------------------

echo "<h2>4. \$_SERVER — Server Information</h2>";

echo "Script Path: " . $_SERVER['PHP_SELF'] . "<br>";
echo "Server Name: " . $_SERVER['SERVER_NAME'] . "<br>";
echo "Request Method: " . $_SERVER['REQUEST_METHOD'] . "<br>";

/*
🔍 Explanation:
- $_SERVER provides information about the script, server, and request.
*/
?>
