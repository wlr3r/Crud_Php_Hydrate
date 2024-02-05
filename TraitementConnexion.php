<?php

require_once 'user.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $mot_de_passe = isset($_POST['mot_de_passe']) ? $_POST['mot_de_passe'] : '';

    $hashedPassword = password_hash($mot_de_passe, PASSWORD_DEFAULT);

    $userData = [
        'username' => $username,
        'password' => $hashedPassword
    ];

    $user = new User($userData);
    $user->login(); // Utiliser la méthode login()
    exit;
}

?>
