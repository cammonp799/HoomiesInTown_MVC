<?php
class UserModel
{
    private $db;

    public function __construct($db)
    {
        $this->db = $db;
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