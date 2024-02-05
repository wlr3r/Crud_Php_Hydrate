<?php

include 'user.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $mot_de_passe = $_POST['mot_de_passe'];

    $user = new User([
        'username' => $username,
        'email' => $email,
    ]);

    $user->setPassword($mot_de_passe); // Utilisez la méthode correcte, setPassword
    $user->register();

    exit;
}

?>
