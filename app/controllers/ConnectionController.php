<?php

class ConnectionController
    {
        private $userModel;

    public function __construct($userModel)
    {
        $this->userModel = $userModel;
    }

        public function index()
        {
            session_start();

            // Vérifier si le formulaire a été soumis
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $email = htmlentities(strip_tags(stripcslashes(trim($_POST['email']))), ENT_QUOTES, 'UTF-8');
            $password = htmlentities(strip_tags(stripcslashes(trim($_POST['mot_de_passe']))), ENT_QUOTES, 'UTF-8');


            // Chercher l'utilisateur par email
            $user = $this->utilisateurModel->findUserByEmail($email);

            // Vérifier si l'utilisateur existe et si le mot de passe est correct
            if ($user && $this->utilisateurModel->verifyPassword($password, $user['Mot_de_passe'])) {
                // Connexion réussie, démarrer une session
                $_SESSION['id'] = $user['Id_Utilisateur'];
                $_SESSION['nom'] = $user['Nom'];
                $_SESSION['prenom'] = $user['Prénom'];

                // Redirection vers la page utilisateur
                header("Location: /profile");
                exit();
            } else {
                $error = "Email ou mot de passe incorrect.";
            }
        }

        $title = "";
        // Inclure la vue pour le head
        include __DIR__ . '/../views/headConnection.php';
        // Inclure la vue pour le header
        include __DIR__ . '/../views/headerConnection.php';
        // Inclure la vue pour la connexion
        include __DIR__ . '/../views/connection.php';
        // Inclure la vue pour le footer
        include __DIR__ . '/../views/footer.php';

        echo displayHeadConnection($title);
        echo displayHeaderConnection();
        echo displayConnection();
        echo displayFooter();
    }
    }
