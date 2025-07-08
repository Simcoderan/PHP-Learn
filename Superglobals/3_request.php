<?php
// ---------------------------------------------
// 📄 3_request.php — Demonstrates $_REQUEST
// ---------------------------------------------

echo "<h2>3. \$_REQUEST — GET or POST data</h2>";

// URL: 3_request.php?username=Simran
if (isset($_REQUEST['username'])) {
  echo "Username: " . htmlspecialchars($_REQUEST['username']) . "<br>";
} else {
  echo "No username passed. Try ?username=Simran in the URL.<br>";
}

/*
🔍 Explanation:
- $_REQUEST can access data from both GET and POST requests.
- Not recommended for sensitive or secure data.
*/
?>
