<?php
// ---------------------------------------------
// 📄 5_session.php — Demonstrates $_SESSION
// ---------------------------------------------

session_start(); // Must be at the top

$_SESSION['user'] = 'Simran';

echo "<h2>5. \$_SESSION — Store data across pages</h2>";
echo "Session 'user' is set to: " . $_SESSION['user'] . "<br>";

/*
🔍 Explanation:
- $_SESSION stores data on the server that persists across pages.
- Used for login, shopping cart, etc.
*/
?>
