<?php

include 'db_connect.php';
class User {
    private $username;
    private $password;
    private $email;
    private $age;

    public function __construct(array $data) {
        $this->hydrate($data);
    }

    private function hydrate(array $data) {
        foreach ($data as $key => $value) {
            $method = 'set' . ucfirst($key);
            if (method_exists($this, $method)) {
                $this->$method($value);
            }
        }
    }

    public function setUsername($username) {
        $this->username = $username;
    }

    public function setPassword($password) {
        $this->password = $password;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function setAge($age) {
        $this->age = $age;
    }

    public function save() {
        // Code pour enregistrer l'utilisateur dans la base de données
        $username = $this->username;
        $password = $this->password;
        $email = $this->email;
        $age = $this->age;

        // Exécutez la requête SQL pour insérer l'utilisateur dans la base de données
        $sql = "INSERT INTO users (username, password, email, age) VALUES ('$username', '$password', '$email', $age)";
        // Exécutez la requête SQL avec votre connexion à la base de données

        // Vérifiez si l'insertion a réussi ou non
        if ($result) {
            echo "Utilisateur créé avec succès.";
        } else {
            echo "Erreur lors de la création de l'utilisateur.";
        }
    }

    public static function getAllUsers() {
    }

    public static function deleteUser($id) {
        // Code pour supprimer un utilisateur de la base de données en fonction de son ID
        $sql = "DELETE FROM users WHERE id = $id";
        // Exécutez la requête SQL avec votre connexion à la base de données

        // Vérifiez si la suppression a réussi ou non
        if ($result) {
            echo "Utilisateur supprimé avec succès.";
        } else {
            echo "Erreur lors de la suppression de l'utilisateur.";
        }
    }

    public function update() {
        // Code pour mettre à jour l'utilisateur dans la base de données
        $username = $this->username;
        $password = $this->password;
        $email = $this->email;
        $age = $this->age;

        // Exécutez la requête SQL pour mettre à jour l'utilisateur dans la base de données
        $sql = "UPDATE users SET username = '$username', password = '$password', email = '$email', age = $age WHERE id = $id";
        // Exécutez la requête SQL avec votre connexion à la base de données

        // Vérifiez si la mise à jour a réussi ou non
        if ($result) {
            echo "Utilisateur mis à jour avec succès.";
        } else {
            echo "Erreur lors de la mise à jour de l'utilisateur.";
        }
    }
}

