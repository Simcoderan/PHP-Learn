<?php
// ---------------------------------------------
// 📄 8_env.php — Demonstrates $_ENV
// ---------------------------------------------

// Simulate an env variable (in real apps, use .env or server config)
$_ENV['APP_ENV'] = 'development';

echo "<h2>8. \$_ENV — Environment Variables</h2>";
echo "Environment: " . $_ENV['APP_ENV'] . "<br>";

/*
🔍 Explanation:
- $_ENV stores configuration like DB credentials, API keys.
- Often used with dotenv packages or server settings.
*/
?>
