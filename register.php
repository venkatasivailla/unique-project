<?php
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
  .register-box {
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

echo "<div class='register-box'>";
echo "<h2>New User Registered</h2>";
echo "<p>Welcome, <strong>$username</strong>! Your account has been created.</p>";
echo "<p>You can now log in using your credentials.</p>";
echo "</div>";
?>