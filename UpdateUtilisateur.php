<?php
include 'db_connect.php'; // Connexion à la base de données
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mise à jour de l'utilisateur</title>
</head>
<body>
    <h1>Mise à jour de l'utilisateur</h1>

    <form method="POST" action="TraitementUpdateUtilisateur.php">
        <?php
        // Utilisez la connexion à la base de données
        $stmt = $conn->prepare("SELECT id_utilisateur, username FROM utilisateur");
        $stmt->execute();

        $users = $stmt->fetchAll(PDO::FETCH_ASSOC);

        foreach ($users as $user) {
            echo '<input type="radio" name="user_id" value="' . $user['id_utilisateur'] . '">' . $user['username'] . '<br>';
        }
        ?>

        <label for="new_username">Nouveau nom d'utilisateur :</label>
        <input type="text" name="new_username" id="new_username" required>

        <label for="new_password">Nouveau mot de passe :</label>
        <input type="password" name="new_password" id="new_password" required>

        <label for="new_email">Nouvel email :</label>
        <input type="email" name="new_email" id="new_email" required>

        <button type="submit">Mettre à jour l'utilisateur</button>
    </form>
</body>
</html>
