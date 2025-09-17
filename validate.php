<?php
// File to store user credentials
$filename = "users.txt";

// Load existing users into an associative array
$users = [];
if (file_exists($filename)) {
  $lines = file($filename, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
  foreach ($lines as $line) {
    list($storedUser, $storedPass) = explode(":", $line);
    $users[$storedUser] = $storedPass;
  }
}

// Get submitted credentials
$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';

echo "<style>
  body {
    background: linear-gradient(135deg, #1f1c2c, #928dab);
    color: white;
    font-family: 'Poppins', sans-serif;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
  }
  .message-box {
    background: rgba(255,255,255,0.05);
    padding: 40px 60px;
    border-radius: 20px;
    text-align: center;
    box-shadow: 0 8px 20px rgba(0,0,0,0.3);
    backdrop-filter: blur(10px);
  }
  h2 {
    font-size: 28px;
    margin-bottom: 20px;
  }
</style>";

echo "<div class='message-box'>";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
  if (array_key_exists($username, $users)) {
    if ($users[$username] === $password) {
      echo "<h2 style='color:lightgreen;'>Login successful. Welcome, $username!</h2>";
      header("Location: home.html");
      exit;
    } else {
      echo "<h2 style='color:#ffcccb;'>Incorrect password. Try again.</h2>";
    }
  } else {
    // Register new user and store in file
    $newEntry = "$username:$password\n";
    file_put_contents($filename, $newEntry, FILE_APPEND);
    echo "<h2 style='color:#add8e6;'>New user registered: <strong>$username</strong></h2>";
    echo "<p>Your credentials have been saved. You can now log in.</p>";
  }
}

echo "</div>";
?>