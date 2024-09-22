<?php
function displayFooter() 
{
    ob_start();
    ?>
    <!--Start footer-->
    <footer>
        <section class="footer_content">
        <section class="footer_logo">
            <img src="./picture/logo/white_logo.png" alt="white logo image">
            <h2>HOOMIES IN TOWN</h2>
        </section>
        
        <section class="footer_info">
            <article >
            <p class="story">
            A PROPOS
            </p>
            <p class="about_us">
            Leur vision est de réinventer le concept de colocation pour les jeunes étudiants
            et les particuliers , en proposant un environnement de vie qui favorise la
            communauté, le partage et l'entraide.
            </p>
            
            <article class="sub_story">
                <button class="btn_footer">En savoir plus</button>
            </article>
        </article>
        
        <article >
            <p class="story">
                NOTRE SERVICE CLIENT
            </p>
            
            <p class="about_us">
                Du lundi au samedi
                <br>
                8h - 19h
                <br>
                Dimanche
                <br>
                9h - 18h
            </p>
        </article>
        
        <article>
            <p class="story">
                Suivez nous sur les réseau sociaux
            </p>

            <p class="about_us">
                <span>Linkedin</span>
                <br>
                <span>Instagram</span>
                <br>
                <span>Facebook</span>
            </p>
        </article>
        </section>
        
        <section class="footer_mentions">
            <p>Mentions légales</p>
            <p>CGU</p>
            <p>Données personelles et cookies</p>
        </section>
    
        </section>
        
        <article class="footer_container">
            <p class="end_footer">© Copyright 2024 : Chimène junior</p>
        </article>
    </footer>
    <!--End footer-->


    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="./javascript/dropdownMenu.js"></script>
    <script src="./javascript/carrousel.js"></script>
</body>
</html>
<?php
    return ob_get_clean();
}
?>