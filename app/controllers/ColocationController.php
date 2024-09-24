<?php
class ColocationController
{
    public function index()
    {
        $title = "Colocation";
        // Inclure la vue pour le head
        include __DIR__ . '/../views/headColocation.php';
        // Inclure la vue pour le header
        include __DIR__ . '/../views/headerColocation.php';
        // Inclure la vue pour le colocation
        include __DIR__ . '/../views/colocation.php';
        // Inclure la vue pour le footer
        include __DIR__ . '/../views/footer.php';

        echo displayHeadColocation($title);
        echo displayHeaderColocation();
        echo displayColocation();
        echo displayFooter();
    }
}
?>