<?php
function displayRegister() 
{
    ob_start();
?>
<!--Start main-->
    <!--Start main-->
    <main>
    <!-- Formulaire d'inscription -->
    <form action="" method="post">
        <article>
            <label>Nom</label>
            <input type="text" name="nom" required />
        </article>
        <article>
            <label>Prénom</label>
            <input type="text" name="prenom" required />
        </article>
        <article>
            <label>Date de naissance</label>
            <input type="date" name="DatNais" required />
        </article>
        <article>
            <label>Date d'inscription</label>
            <input type="date" name="DatIns" required />
        </article>
        <article>
            <label>Téléphone</label>
            <input type="tel" name="telephone" required />
        </article>
        <article>
            <label>Email</label>
            <input type="email" name="email" required />
        </article>
        <article>
            <label>Mot de passe</label>
            <input type="password" name="pwd" required />
        </article>
        <article>
            <input
            type="submit"
            value="Enregistrer"
            name="Submit"
            class="btn_login"
            />
        </article>

        <p class="no_account">
            Vous avez deja un compte ? <a href="/login">Connectez-vous</a>
        </p>
    </form>
    </main>
    <!--End main-->
<?php
    return ob_get_clean();
}
?>