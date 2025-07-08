<?php
// ---------------------------------------------
// 📄 2_post.php — Demonstrates $_POST Superglobal
// ---------------------------------------------

echo "<h2>2. \$_POST — Form Data via POST</h2>";

// HTML Form
echo '
<form method="POST" action="">
  Enter Email: <input type="text" name="email" required>
  <input type="submit" value="Submit">
</form>
';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['email'])) {
  echo "Your email is: " . htmlspecialchars($_POST['email']) . "<br>";
}

/*
🔍 Explanation:
- $_POST collects data from forms using POST method.
- Data is not visible in the URL, unlike $_GET.
*/
?>
