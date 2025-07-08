<?php
// ---------------------------------------------
// 📄 7_files.php — Demonstrates $_FILES
// ---------------------------------------------

echo "<h2>7. \$_FILES — Handle File Upload</h2>";

echo '
<form method="POST" enctype="multipart/form-data">
  Upload a file: <input type="file" name="myFile" required>
  <input type="submit" value="Upload">
</form>
';

if (isset($_FILES['myFile']) && $_FILES['myFile']['error'] === UPLOAD_ERR_OK) {
  $filename = basename($_FILES['myFile']['name']);
  $tmpname = $_FILES['myFile']['tmp_name'];

  if (!is_dir('uploads')) mkdir('uploads'); // Ensure uploads/ exists

  if (move_uploaded_file($tmpname, "uploads/" . $filename)) {
    echo "✅ File uploaded: " . $filename . "<br>";
  } else {
    echo "❌ Upload failed.<br>";
  }
}

/*
🔍 Explanation:
- $_FILES handles uploaded files via forms.
- Always check 'error' before processing.
*/
?>
