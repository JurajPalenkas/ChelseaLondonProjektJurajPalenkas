<?php
// Pripojenie k databáze
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "udaje";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  // Spracovanie prihlasovacích údajov
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Overenie prihlasovacích údajov v databáze
    $stmt = $conn->prepare("SELECT * FROM users WHERE username = :username AND password = :password");
    $stmt->bindParam(':username', $username);
    $stmt->bindParam(':password', $password);
    $stmt->execute();

    if ($stmt->rowCount() == 1) {
      // Prihlásenie úspešné
      echo "Login successful!";
    } else {
      // Prihlásenie neúspešné
      echo "Invalid username or password.";
    }
  }

  $conn = null;
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
// Remove the closing 
