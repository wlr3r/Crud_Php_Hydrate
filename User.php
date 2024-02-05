<?php

class User {
    private $username;
    private $mot_de_passe;
    private $email;

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
        $this->mot_de_passe = password_hash($password, PASSWORD_DEFAULT);
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public static function deleteUser() {
        //CONNECT DBD
        include 'db_connect.php';

        try {
            $stmt = $pdo->prepare('DELETE FROM utilisateur WHERE id = ?');
            $stmt->execute([$id]);

            echo "User deleted successfully.";
        } catch (PDOException $e) {
            echo "Error deleting user: " . $e->getMessage();
        }
    }

    public function update() {
        // CONNECT DB
        include 'db_connect.php';
    
        try {
            $stmtCheck = $pdo->prepare("SELECT * FROM utilisateur WHERE id = ?");
            $stmtCheck->execute([$id]);
    
            if ($stmtCheck->rowCount() > 0) {
                $stmt = $pdo->prepare("UPDATE utilisateur SET username = ?, mot_de_passe = ?, email = ? WHERE id = ?");
                $stmt->execute([$this->username, $this->mot_de_passe, $this->email, $id]);
    
                if ($stmt->rowCount() > 0) {
                    echo "Utilisateur mis à jour avec succès.";
                } else {
                    echo "Aucune modification effectuée. Les détails de l'utilisateur restent inchangés.";
                }
            } else {
                echo "L'utilisateur avec l'ID $id n'existe pas.";
            }
        } catch (PDOException $e) {
            echo "Erreur lors de la mise à jour de l'utilisateur : " . $e->getMessage();
        }
    }
    

    public function register() {
        include 'db_connect.php';

        try {
            $stmt = $pdo->prepare('INSERT INTO utilisateur (username, mot_de_passe, email) VALUES (?, ?, ?)');
            $stmt->execute([$this->username, $this->mot_de_passe, $this->email]);
            echo "Utilisateur créé avec succès.";
        } catch (PDOException $e) {
            echo "Erreur création utilisateur: " . $e->getMessage();
        }
    }
    
    public function login() {
        include 'db_connect.php';
    
        try {
            $stmt = $pdo->prepare('SELECT * FROM utilisateur WHERE username = ?');
            $stmt->execute([$this->username]);
            $fetch = $stmt->fetch();
    
            if ($fetch && password_verify($this->mot_de_passe, $fetch['mot_de_passe'])) {
                echo "Connexion réussie.";
            } else {
                echo "Nom d'utilisateur ou mot de passe incorrect.";
            }
        } catch (PDOException $e) {
            echo "Erreur de connexion: " . $e->getMessage();
        }
    }    
}

?>
