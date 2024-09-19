<?php
function displayHeaderRegister()
{
    ob_start();
    ?>
    
    <!--Start Header -->
<body>
    <header>
        <section class="navbar">
            <video autoplay muted loop class="header_video">
                <source src="./video/video-accueil.MP4" type="video/mp4" alt="Header Video">
            </video>
            <article>
            <img src="./picture/logo/black_logo.png" alt="Black Logo" class="black_logo">
            </article>
            <ul class="links">
                <li><a href="./index.html">Accueil</a></li>
                <li><a href="#Apropos">A propos</a></li>
                <li><a href="./pages/colocation.html">Colocations</a></li>
                <li><a href="./pages/login.html">Se connecter</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
            <article class="toggle_btn">
            <i class="fa-solid fa-bars"></i>
            </article>
        </section>
        
        <!-- Start Dropdown Menu -->
        <section class="dropdown_menu">
            <li><a href="./index.html">Accueil</a></li>
            <li><a href="#Apropos">A propos</a></li>
            <li><a href="./pages/colocation.html">Colocations</a></li>
            <li><a href="./pages/login.html">Se connecter</a></li>
            <li><a href="#Contact">Contact</a></li>
        </section>
        <!-- End Dropdown Menu -->

        <section class="contanier_welcome">
            <h1>INSCRIPTION</h1>
            <p>
            Inscrivez-vous <br/>
            pour trouver la colocation parfaite
            </p>
        </section>

    </header>
    <!-- End Header -->
<?php
return ob_get_clean();
}