<?php
class ProfilController
{
    public function index()
    {
        $title = "Profil";
        // Inclure la vue pour le head
        include __DIR__ . '/../views/headProfil.php';
        // Inclure la vue pour le header
        include __DIR__ . '/../views/headerProfil.php';
        // Inclure la vue pour le profil
        include __DIR__ . '/../views/profil.php';
        // Inclure la vue pour le footer
        include __DIR__ . '/../views/footer.php';

        echo displayHeadProfil($title);
        echo displayHeaderProfil();
        echo displayProfil();
        echo displayFooter();
    }
}
?>