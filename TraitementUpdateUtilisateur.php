<?php
include 'db_connect.php'; // Connexion à la base de données

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user_id = $_POST['user_id'];
    $new_username = $_POST['new_username'];
    $new_password = password_hash($_POST['new_password'], PASSWORD_DEFAULT);
    $new_email = $_POST['new_email'];

    $stmt = $conn->prepare("UPDATE utilisateur SET username = :new_username, mot_de_passe = :new_password, email = :new_email WHERE id_utilisateur = :user_id");
    $stmt->bindParam(':new_username', $new_username);
    $stmt->bindParam(':new_password', $new_password);
    $stmt->bindParam(':new_email', $new_email);
    $stmt->bindParam(':user_id', $user_id);

    if ($stmt->execute()) {
        echo "Utilisateur mis à jour avec succès.";
    } else {
        echo "Erreur lors de la mise à jour de l'utilisateur.";
    }
}
?>
