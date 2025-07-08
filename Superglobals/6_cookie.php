<?php
// ---------------------------------------------
// 📄 6_cookie.php — Demonstrates $_COOKIE
// ---------------------------------------------

// Set cookie before output
setcookie("user", "Simran", time() + 3600); // 1 hour

echo "<h2>6. \$_COOKIE — Store data in browser</h2>";

if (isset($_COOKIE['user'])) {
  echo "Cookie value: " . $_COOKIE['user'] . "<br>";
} else {
  echo "Cookie not set yet. Refresh the page.<br>";
}

/*
🔍 Explanation:
- $_COOKIE stores data in the user's browser.
- Available on the next page load.
*/
?>
