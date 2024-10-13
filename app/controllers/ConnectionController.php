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


        // Vérifier si l'utilisateur est déjà connecté
        if (isset($_SESSION['id'])) {
            // Rediriger vers la page utilisateur si l'utilisateur est déjà connecté
            header("Location: /profile");
            exit();
        }

         // Vérifier si le formulaire a été soumis
         if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $email = htmlentities(strip_tags(stripcslashes(trim($_POST['email']))), ENT_QUOTES, 'UTF-8');
            $password = htmlentities(strip_tags(stripcslashes(trim($_POST['mot_de_passe']))), ENT_QUOTES, 'UTF-8');

            // Chercher l'utilisateur par email
            $user = $this->userModel->getUserByEmail($email);

            // Vérifier si l'utilisateur existe et si le mot de passe est correct
            if ($user && $this->userModel->verifyPassword($password, $user['mot_de_passe'])) {
                // Connexion spécie, démarrer une session
                $_SESSION['id'] = $user['id'];
                $_SESSION['nom'] = $user['nom'];
                $_SESSION['prenom'] = $user['Prenom'];
                $_SESSION['date_naissance'] = $user['date_naissance'];
                $_SESSION['date_inscription'] = $user['date_inscription'];
                $_SESSION['telephone'] = $user['telephone'];
                $_SESSION['email'] = $user['email'];
                
                // Rediriger vers la page utilisateur
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
