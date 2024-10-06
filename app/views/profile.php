<?php
function displayProfile()
{
    ob_start();
    ?>
    
    <!-- Start main-->
    <main>
        <section class="dashboard_title">
        <section class="dashboard">
            <article class="profile">
                <img src="../picture/homePage/4b8877fa-1f31-46f3-ad90-f43ac4f8341b.JPG rounded-circle" alt="white logo image">
                <h4>Junior Chimène</h4>
                <article class="dashboard_btn">
                    <a href="" class="btn_dashboard">Modifier le profil</a>
                    <a href="" class="btn_dashboard_1">Déconnexion</a>
                </article>
            </article>
        </section>
        </section>
    </main>
    <!-- End main-->
    
<?php
    return ob_get_clean();
}
?>