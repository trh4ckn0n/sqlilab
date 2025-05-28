<?php
include 'db.php';
include 'init_db.php';

if (isset($_GET['id'])) {
    $id = $_GET['id']; // Pas d'échappement → SQLi vulnérable
    $query = "SELECT * FROM users WHERE id = $id";
    $result = mysqli_query($conn, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo "ID: " . $row['id'] . "<br>";
            echo "Username: " . $row['username'] . "<br>";
            echo "Password: " . $row['password'] . "<br><hr>";
        }
    } else {
        echo "Aucun résultat.";
    }
} else {
    echo "Paramètre ?id= requis";
}
?>
