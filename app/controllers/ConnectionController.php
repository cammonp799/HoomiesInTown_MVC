<?php
class ConnectionController
{

    private $UserModel;

    public function __Construct($UserModel)
    {
        $this->UserModel = $UserModel;
    }
    public function index()
    {

        session_start();

        // Vérifier si l'utilisateur est déjà connecté
        if (isset($_SESSION['id'])) {
            // Rediriger vers la page utilisateur si l'utilisateur est déjà connecté
            header("Location: /profil");
            exit();
        }

        // Vérifier si le formulaire a été soumis
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            //Vérifier si les champs sont vides
            
            // Nettoyer et traiter les données envoyées par le formulaire
            $email = htmlentities(strip_tags(stripcslashes(trim($_POST['email']))), ENT_QUOTES, 'UTF-8');
            $password = htmlentities(strip_tags(stripcslashes(trim($_POST['mot_de_passe']))), ENT_QUOTES, 'UTF-8');


            // Chercher l'utilisateur par email
            $user = $this->UserModel->findUserByEmail($email);

            // Vérifier si l'utilisateur existe et si le mot de passe est correct
            if ($user && $this->UserModel->verifyPassword($password, $user['mdp'])) {
                // Connexion réussie, démarrer une session
                $_SESSION['id'] = $user['id'];
                $_SESSION['nom'] = $user['nom'];
                $_SESSION['prenom'] = $user['prenom'];

                // Redirection vers la page utilisateur
                header("Location: /profil");
                exit();
            } else {
                $error = "Email ou mot de passe incorrect.";
            }
        }


        $title = "Login";
        // Inclure la vue pour le head
        include __DIR__ . '/../views/headConnection.php';
        // Inclure la vue pour le header
        include __DIR__ . '/../views/headerConnection.php';
        // Inclure la vue pour le login
        include __DIR__ . '/../views/connection.php';
        // Inclure la vue pour le footer
        include __DIR__ . '/../views/footer.php';

        echo displayHeadConnection($title);
        echo displayHeaderConnection();
        echo displayConnection();
        echo displayFooter();
    }
}
?>