<?php
$host = getenv("DB_HOST") ?: "127.0.0.1"; // 🔁 met ici le hostname exact fourni par Render
$user = getenv("DB_USER") ?: "root";
$pass = getenv("DB_PASS") ?: "trkn";
$db   = getenv("DB_NAME") ?: "trknab";

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die("Erreur de connexion DB: " . $conn->connect_error);
}
?>
