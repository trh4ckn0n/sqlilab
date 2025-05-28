<?php include("db.php"); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Recherche Utilisateur - Lab SQLi</title>
</head>
<body style="background:#111;color:#0f0;font-family:monospace">
    <h2>🔍 Recherche d'utilisateur</h2>
    <form method="GET">
        <label for="user">Nom :</label>
        <input type="text" name="user" id="user">
        <input type="submit" value="Chercher">
    </form>

    <?php
    if (isset($_GET['user'])) {
        $name = $_GET['user'];
        $query = "SELECT id, username, email FROM users WHERE username = '$name'";
        echo "<pre>💬 SQL Debug: $query</pre>";
        $result = $conn->query($query);

        if ($result && $result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<p>👤 ID: {$row['id']} | Nom: {$row['username']} | Email: {$row['email']}</p>";
            }
        } else {
            echo "<p>Aucun utilisateur trouvé.</p>";
        }
    }
    ?>
</body>
</html>
