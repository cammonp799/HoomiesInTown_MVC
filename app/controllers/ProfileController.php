<?php
class ProfileController
{
    public function index()
    {
        
        // Inclure la vue pour le head
        include __DIR__ . '/../views/headProfile.php';
        // Inclure la vue pour le header
        include __DIR__ . '/../views/headerProfile.php';
        // Inclure la vue pour le profil
        include __DIR__ . '/../views/profile.php';
        // Inclure la vue pour le footer
        include __DIR__ . '/../views/footer.php';

        echo displayHeadProfile($title);
        echo displayHeaderProfile();
        echo displayProfile();
        echo displayFooter();
    }
}
?>