<?php
class RegisterController
{

    private $userModel;

    public function __construct($userModel)
    {
        $this->userModel = $userModel;
    }
    public function index()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Vérifier si tous les champs obligatoires sont remplis
            if (isset($_POST['nom'], $_POST['prenom'], $_POST['date_naissance'], $_POST['date_inscription'], $_POST['telephone'], $_POST['email'], $_POST['mot_de_passe'])) {
                // Récupération des données du formulaire
                $nom = $_POST['nom'];
                $prenom = $_POST['prenom'];
                $date_naissance = $_POST['date_naissance'];
                $date_inscription = $_POST['date_inscription'];
                $telephone = $_POST['telephone'];
                $email = $_POST['email'];
                $mot_de_passe = password_hash($_POST['mot_de_passe'], PASSWORD_DEFAULT); // Hacher le mot de passe
                
                // Insertion des données dans la base de données
                $this->userModel->addUser($nom, $prenom, $date_naissance, $date_inscription, $telephone, $email, $mot_de_passe);
                header('Location: /connection');
                exit();
            }
        }



        $title = "Register";
        // Inclure la vue pour le head
        include __DIR__ . '/../views/headConnection.php';
        // Inclure la vue pour le header
        include __DIR__ . '/../views/headerRegister.php';
        // Inclure la vue pour le register
        include __DIR__ . '/../views/register.php';
        // Inclure la vue pour le footer
        include __DIR__ . '/../views/footer.php';

        echo displayHeadConnection($title);
        echo displayHeaderRegister();
        echo displayRegister();
        echo displayFooter();
    }
}
?>