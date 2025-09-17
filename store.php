<?php
$text = $_POST['userText'] ?? '';

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
  .message {
    background: rgba(255,255,255,0.05);
    padding: 40px 60px;
    border-radius: 20px;
    text-align: center;
    box-shadow: 0 8px 20px rgba(0,0,0,0.3);
    backdrop-filter: blur(10px);
  }
  .return-btn {
    margin-top: 20px;
    padding: 12px 30px;
    font-size: 18px;
    background: linear-gradient(to right, #ff416c, #ff4b2b);
    color: white;
    border: none;
    border-radius: 50px;
    cursor: pointer;
    box-shadow: 0 4px 15px rgba(255, 65, 108, 0.6);
    transition: transform 0.2s ease, box-shadow 0.3s ease;
    text-decoration: none;
    display: inline-block;
  }
  .return-btn:hover {
    transform: scale(1.05);
    box-shadow: 0 6px 20px rgba(255, 65, 108, 0.8);
  }
</style>";

echo "<div class='message'>";

if ($_SERVER["REQUEST_METHOD"] === "POST" && !empty($text)) {
  file_put_contents("uploads.txt", $text . "\n", FILE_APPEND);
  echo "<h2>Text uploaded successfully!</h2>";
} else {
  echo "<h2 style='color:red;'>No text provided.</h2>";
}

echo "<a href='home.html' class='return-btn'>Return to Upload Page</a>";
echo "</div>";
?>