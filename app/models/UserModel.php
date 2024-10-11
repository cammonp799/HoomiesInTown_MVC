<?php
class UserModel
{
    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function addUser($nom, $prenom, $date_naissance, $date_inscription, $telephone, $email, $mot_de_passe)
    {
        $sql = "INSERT INTO utilisateurs (nom, prenom, date_naissance, date_inscription, telephone, email, mot_de_passe) VALUES (:nom, :prenom, :date_naissance, :date_inscription, :telephone, :email, :mot_de_passe)";
        try {
            $statement = $this->db->prepare($sql);
            $statement->execute([
                ':nom' => $nom,
                ':prenom' => $prenom,
                ':date_naissance' => $date_naissance,
                ':date_inscription' => $date_inscription,
                ':telephone' => $telephone,
                ':email' => $email,
                ':mot_de_passe' => password_hash($mot_de_passe, PASSWORD_DEFAULT)
            ]);
        } catch (PDOException $e) {
            // Gestion des erreurs
            throw new Exception("Erreur lors de la requête : " . $e->getMessage());
        }
    }

    public function getUserByEmail($email)
    {
        $sql = "SELECT * FROM utilisateurs WHERE email = :email";
        try {
            $statement = $this->db->prepare($sql);
            $statement->execute(['email' => $email]);
            return $statement->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            // Gestion des erreurs
            throw new Exception("Erreur lors de la requête : " . $e->getMessage());
        }
    }

    public function verifyPassword($enteredPassword, $storedPassword)
    {
        return password_verify($enteredPassword, $storedPassword);
    }
}
?>