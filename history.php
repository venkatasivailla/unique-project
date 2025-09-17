<?php
$filename = "uploads.txt";

echo "<style>
  body {
    background: linear-gradient(135deg, #1f1c2c, #928dab);
    color: white;
    font-family: 'Poppins', sans-serif;
    padding: 40px;
  }
  .history-box {
    background: rgba(255,255,255,0.05);
    padding: 30px;
    border-radius: 20px;
    box-shadow: 0 8px 20px rgba(0,0,0,0.3);
    backdrop-filter: blur(10px);
    max-width: 600px;
    margin: auto;
  }
  h2 {
    font-size: 28px;
    margin-bottom: 20px;
    text-align: center;
  }
  ul {
    list-style: none;
    padding: 0;
  }
  li {
    background-color: rgba(255,255,255,0.1);
    margin: 10px 0;
    padding: 10px;
    border-radius: 8px;
  }
</style>";

echo "<div class='history-box'>";
echo "<h2>Uploaded Text History</h2>";

if (file_exists($filename)) {
  $entries = file($filename, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
  if (count($entries) > 0) {
    echo "<ul>";
    foreach ($entries as $entry) {
      echo "<li>" . htmlspecialchars($entry) . "</li>";
    }
    echo "</ul>";
  } else {
    echo "<p>No entries found.</p>";
  }
} else {
  echo "<p>No history available.</p>";
}

echo "</div>";
?>