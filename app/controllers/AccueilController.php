<?php
class AccueilController
{
    public function index()
    {
        $title = "Accueil";
        // Inclure la vue pour le head
        include __DIR__ . '/../views/headAccueil.php';
        // Inclure la vue pour le header
        include __DIR__ . '/../views/headerAccueil.php';
        // Inclure la vue pour l'accueil
        include __DIR__ . '/../views/accueil.php';
        // Inclure la vue pour le footer
        include __DIR__ . '/../views/footer.php';

        echo displayHeadAccueil($title);
        echo displayHeaderAccueil();
        echo displayAccueil();
        echo displayFooter();
    }
}