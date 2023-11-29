<?php
/* Template Name: contact */
?>

<?php get_header(); ?>

<main>
    <!--Banniere-->
    <div class="main_banner">
        <div class="mission_banner">
            <div class="mission_banner_title_container">
                <h2 class="h1">nous contacter</h2>
            </div>
            <div class="mission_banner_img_container">
                <img src="<?php bloginfo("template_url") ?>/images/mission_banner_img.png" alt="photo antique de femmes">
            </div>
        </div>
    </div>
    <!-- Contenu du main -->
    <div class="main_content contact_main">
        <section class="coord_map_container">
            <div class="coords">
                <h2 class="h2-cursive">Coordonnées</h2>
                <div class="address">
                    <p class="textblock"><span class="material-symbols-outlined">location_on</span> 363 Rue Vézina, Trois-Pistoles, QC G0L 4K0</p> 
                </div>
                <div class="tel_number">
                    <p class="textblock"><span class="material-symbols-outlined">call</span> (418) 857-3248</p>
                </div>
                <div class="direct_contact">
                    <p class="textblock contact_poste"><span class="material-symbols-outlined">alternate_email</span> <strong>Directrice Générale</strong></p>
                    <p class="textblock contact_name">Gabrielle Ayotte Garneau</p>
                    <a href="mailto:compagnonspatrimoinevivant@gmail.com" class="contact_name_email">compagnonspatrimoinevivant@gmail.com</a>
                </div>
                <div class="coord_contact">
                    <p class="textblock contact_poste"><span class="material-symbols-outlined">alternate_email</span><strong>Coordonnatrice</strong></p>
                    <p class="textblock contact_name">Alexandra Turgeon</p>
                    <a href="mailto:coordofestivalrvgg@gmail.com" class="contact_name_email">coordofestivalrvgg@gmail.com</a>
                </div>
            </div>
            <div class="map_location">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d5326.643832980805!2d-69.174352!3d48.123315!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4c95f548240ef039%3A0x280fd7bc6d0809f!2s363%20Rue%20V%C3%A9zina%2C%20Trois-Pistoles%2C%20QC%20G0L%204K0%2C%20Canada!5e0!3m2!1sfr!2sus!4v1692629034519!5m2!1sfr!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </section>
        <section class="contact_form_and_medias">
            <div class="contact_form">
                <?php echo do_shortcode('[fluentform id="1"]'); ?> 
            </div>
            <div class="medias_et_cheval">
                <i class="bi bi-facebook"></i>
                <img src="<?php bloginfo("template_url") ?>/images/cheval_wow.png" alt="cheval qui dit wow">
                <i class="bi bi-instagram"></i>
            </div>
        </section>
    </div>
</main>
<?php get_footer(); ?>