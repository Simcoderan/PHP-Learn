<?php
// ---------------------------------------------
// 📄 9_globals.php — Demonstrates $GLOBALS
// ---------------------------------------------

$a = 5;
$b = 10;

function add() {
  $GLOBALS['sum'] = $GLOBALS['a'] + $GLOBALS['b'];
}

add();

echo "<h2>9. \$GLOBALS — Access global variables</h2>";
echo "Sum of \$a and \$b = " . $sum . "<br>";

/*
🔍 Explanation:
- $GLOBALS accesses global variables inside functions.
- Not recommended for large applications due to maintainability.
*/
?>
