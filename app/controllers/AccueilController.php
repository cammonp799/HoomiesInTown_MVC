<?php

class AccueilController
{

    public function index()
    {
        $title = "Accueil";
        // Inclure la vue pour le head
        include __DIR__ . '/../views/accueil.php';
        include __DIR__ . '/../views/headAccueil.php';

        echo displayAccueil();
        echo displayHeadAccueil($title);
    

    }
}