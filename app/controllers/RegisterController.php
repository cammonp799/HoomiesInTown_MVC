<?php
class RegisterController
{
    public function index()
    {
        $title = "Register";
        // Inclure la vue pour le head
        include __DIR__ . '/../views/headConnection.php';
        // Inclure la vue pour le header
        include __DIR__ . '/../views/headerRegister.php';
        // Inclure la vue pour le register
        include __DIR__ . '/../views/register.php';
        // Inclure la vue pour le footer
        include __DIR__ . '/../views/footer.php';

        echo displayHeadConnection($title);
        echo displayHeaderRegister();
        echo displayRegister();
        echo displayFooter();
    }
}
?>