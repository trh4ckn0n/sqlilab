<?php
include 'db.php';

// Vérifie si la table 'users' existe
$result = $conn->query("SHOW TABLES LIKE 'users'");
if ($result->num_rows == 0) {
    // La table n'existe pas, on lance l'init
    $sql = file_get_contents('init.sql');
    if ($conn->multi_query($sql)) {
        do {
            // libère les résultats multiples
            if ($res = $conn->store_result()) {
                $res->free();
            }
        } while ($conn->next_result());
        echo "Base initialisée.\n";
    } else {
        echo "Erreur d'initialisation: " . $conn->error;
    }
} else {
    echo "Base déjà initialisée.\n";
}
?>
