<?php

class SignOutController
{
    public function index()
    {
        // Deconnexion
        session_start();
        // Supprimer les variables de session
        session_unset();  
        // Destruction de la session
        session_destroy();  

        // Redirection vers la page de connexion
        header("Location: /login");
        exit();
    }
}