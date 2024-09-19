<?php
function displayLogin() 
{
    ob_start()
?>

<!--Start main-->
<main>
    <!-- Formulaire de connexion -->
    <form action="" method="post">
        <article>
            <label>Email</label>
            <input type="email" name="email" required />
        </article>
        <article>
            <label>Mot de passe</label>
            <input type="password" name="mot_de_passe" required />
        </article>
        <article>
            <input type="submit" value="Connexion" class="btn_login" />
        </article>
        <p class="no_account">
            Vous n'avez pas de compte ? <a href="register.html">Inscrivez-vous</a>
        </p>
    </form>
    <!-- Formulaire de connexion -->
</main>
<!--End main-->

<?php
    return ob_get_clean();
}
?>