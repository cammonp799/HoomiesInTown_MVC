<?php
class HomePageController
{
    public function index()
    {
        $title = "Accueil";
        // Inclure la vue pour le head
        include __DIR__ . '/../views/headHomePage.php';
        // Inclure la vue pour le header
        include __DIR__ . '/../views/headerHomePage.php';
        // Inclure la vue pour l'accueil
        include __DIR__ . '/../views/HomePage.php';
        // Inclure la vue pour le footer
        include __DIR__ . '/../views/footer.php';

        echo displayHeadHomePage($title);
        echo displayHeaderHomePage();
        echo displayHomePage();
        echo displayFooter();
    }
}