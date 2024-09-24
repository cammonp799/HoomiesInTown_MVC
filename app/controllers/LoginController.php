<?php
class LoginController
{
    public function index()
    {
        $title = "Login";
        // Inclure la vue pour le head
        include __DIR__ . '/../views/headLogin.php';
        // Inclure la vue pour le header
        include __DIR__ . '/../views/headerLogin.php';
        // Inclure la vue pour le login
        include __DIR__ . '/../views/login.php';
        // Inclure la vue pour le footer
        include __DIR__ . '/../views/footer.php';

        echo displayHeadLogin($title);
        echo displayHeaderLogin();
        echo displayLogin();
        echo displayFooter();
    }
}
?>