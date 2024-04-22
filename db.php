<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "udaje";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // nastavenie režimu výnimiek PDO
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Úspešne pripojený";
} catch(PDOException $e) {
    echo "Pripojenie zlyhalo: " . $e->getMessage();
}
?>